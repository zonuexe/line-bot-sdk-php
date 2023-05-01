#!/bin/bash
cd `dirname $0`

REPO_ROOT_DIR=$PWD/..
OPENAPI_GENERATOR_VERSION=6.5.0
CLIENT_SCHEMAS=(
    "channel-access-token"
    "insight"
    "manage-audience"
    "messaging-api"
    "liff"
)

for schema in "${CLIENT_SCHEMAS[@]}"; do
    camelSchemaName=$(echo $schema | awk -F '-' '{ for(i=1; i<=NF; i++) {printf toupper(substr($i,1,1)) substr($i,2)}} END {print ""}')
    rm -rf $REPO_ROOT_DIR/src/clients/$schema
    npx openapi-generator-cli generate \
    -i $REPO_ROOT_DIR/line-openapi/$schema.yml \
    -g php \
    -o $REPO_ROOT_DIR/src/clients/$schema \
    --additional-properties="invokerPackage=LINE\\\\Clients\\\\$camelSchemaName" \
    --additional-properties="variableNamingConvention=camelCase"
done

rm -rf $REPO_ROOT_DIR/src/webhook
npx openapi-generator-cli generate \
-i $REPO_ROOT_DIR/line-openapi/webhook.yml \
-g php \
-o $REPO_ROOT_DIR/src/webhook \
--additional-properties="invokerPackage=LINE\\\\Webhook" \
--additional-properties="variableNamingConvention=camelCase"

php $PWD/replace-discriminator-type.php
