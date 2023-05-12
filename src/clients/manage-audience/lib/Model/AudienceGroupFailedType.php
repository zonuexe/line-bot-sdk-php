<?php
/**
 * Copyright 2023 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
/**
 * AudienceGroupFailedType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\Clients\ManageAudience
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LINE Messaging API
 *
 * This document describes LINE Messaging API.
 *
 * The version of the OpenAPI document: 0.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LINE\Clients\ManageAudience\Model;
use \LINE\Clients\ManageAudience\ObjectSerializer;

/**
 * AudienceGroupFailedType Class Doc Comment
 *
 * @category Class
 * @description Failed type
 * @package  LINE\Clients\ManageAudience
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AudienceGroupFailedType
{
    /**
     * Possible values of this enum
     */
    public const AUDIENCE_GROUP_AUDIENCE_INSUFFICIENT = 'AUDIENCE_GROUP_AUDIENCE_INSUFFICIENT';

    public const INTERNAL_ERROR = 'INTERNAL_ERROR';

    public const NULL = 'null';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUDIENCE_GROUP_AUDIENCE_INSUFFICIENT,
            self::INTERNAL_ERROR,
            self::NULL
        ];
    }
}


