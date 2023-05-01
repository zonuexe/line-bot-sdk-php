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
 * AudienceGroup
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
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LINE\Clients\ManageAudience\Model;

use \ArrayAccess;
use \LINE\Clients\ManageAudience\ObjectSerializer;

/**
 * AudienceGroup Class Doc Comment
 *
 * @category Class
 * @description Audience group
 * @package  LINE\Clients\ManageAudience
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AudienceGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AudienceGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audienceGroupId' => 'int',
        'type' => '\LINE\Clients\ManageAudience\Model\AudienceGroupType',
        'description' => 'string',
        'status' => '\LINE\Clients\ManageAudience\Model\AudienceGroupStatus',
        'failedType' => '\LINE\Clients\ManageAudience\Model\AudienceGroupFailedType',
        'audienceCount' => 'int',
        'created' => 'int',
        'requestId' => 'string',
        'clickUrl' => 'string',
        'isIfaAudience' => 'bool',
        'permission' => '\LINE\Clients\ManageAudience\Model\AudienceGroupPermission',
        'createRoute' => '\LINE\Clients\ManageAudience\Model\AudienceGroupCreateRoute'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audienceGroupId' => 'int64',
        'type' => null,
        'description' => null,
        'status' => null,
        'failedType' => null,
        'audienceCount' => 'int64',
        'created' => 'int64',
        'requestId' => null,
        'clickUrl' => 'uri',
        'isIfaAudience' => null,
        'permission' => null,
        'createRoute' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audienceGroupId' => false,
		'type' => false,
		'description' => false,
		'status' => false,
		'failedType' => true,
		'audienceCount' => false,
		'created' => false,
		'requestId' => false,
		'clickUrl' => false,
		'isIfaAudience' => false,
		'permission' => false,
		'createRoute' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'audienceGroupId' => 'audienceGroupId',
        'type' => 'type',
        'description' => 'description',
        'status' => 'status',
        'failedType' => 'failedType',
        'audienceCount' => 'audienceCount',
        'created' => 'created',
        'requestId' => 'requestId',
        'clickUrl' => 'clickUrl',
        'isIfaAudience' => 'isIfaAudience',
        'permission' => 'permission',
        'createRoute' => 'createRoute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audienceGroupId' => 'setAudienceGroupId',
        'type' => 'setType',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'failedType' => 'setFailedType',
        'audienceCount' => 'setAudienceCount',
        'created' => 'setCreated',
        'requestId' => 'setRequestId',
        'clickUrl' => 'setClickUrl',
        'isIfaAudience' => 'setIsIfaAudience',
        'permission' => 'setPermission',
        'createRoute' => 'setCreateRoute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audienceGroupId' => 'getAudienceGroupId',
        'type' => 'getType',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'failedType' => 'getFailedType',
        'audienceCount' => 'getAudienceCount',
        'created' => 'getCreated',
        'requestId' => 'getRequestId',
        'clickUrl' => 'getClickUrl',
        'isIfaAudience' => 'getIsIfaAudience',
        'permission' => 'getPermission',
        'createRoute' => 'getCreateRoute'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('audienceGroupId', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('failedType', $data ?? [], null);
        $this->setIfExists('audienceCount', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('requestId', $data ?? [], null);
        $this->setIfExists('clickUrl', $data ?? [], null);
        $this->setIfExists('isIfaAudience', $data ?? [], null);
        $this->setIfExists('permission', $data ?? [], null);
        $this->setIfExists('createRoute', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets audienceGroupId
     *
     * @return int|null
     */
    public function getAudienceGroupId()
    {
        return $this->container['audienceGroupId'];
    }

    /**
     * Sets audienceGroupId
     *
     * @param int|null $audienceGroupId The audience ID.
     *
     * @return self
     */
    public function setAudienceGroupId($audienceGroupId)
    {
        if (is_null($audienceGroupId)) {
            throw new \InvalidArgumentException('non-nullable audienceGroupId cannot be null');
        }
        $this->container['audienceGroupId'] = $audienceGroupId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroupType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroupType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The audience's name.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroupStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroupStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets failedType
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroupFailedType|null
     */
    public function getFailedType()
    {
        return $this->container['failedType'];
    }

    /**
     * Sets failedType
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroupFailedType|null $failedType failedType
     *
     * @return self
     */
    public function setFailedType($failedType)
    {
        if (is_null($failedType)) {
            array_push($this->openAPINullablesSetToNull, 'failedType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('failedType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['failedType'] = $failedType;

        return $this;
    }

    /**
     * Gets audienceCount
     *
     * @return int|null
     */
    public function getAudienceCount()
    {
        return $this->container['audienceCount'];
    }

    /**
     * Sets audienceCount
     *
     * @param int|null $audienceCount The number of users included in the audience.
     *
     * @return self
     */
    public function setAudienceCount($audienceCount)
    {
        if (is_null($audienceCount)) {
            throw new \InvalidArgumentException('non-nullable audienceCount cannot be null');
        }
        $this->container['audienceCount'] = $audienceCount;

        return $this;
    }

    /**
     * Gets created
     *
     * @return int|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int|null $created When the audience was created (in UNIX time).
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string|null $requestId The request ID that was specified when the audience was created. This is only included when `audienceGroup.type` is CLICK or IMP.
     *
     * @return self
     */
    public function setRequestId($requestId)
    {
        if (is_null($requestId)) {
            throw new \InvalidArgumentException('non-nullable requestId cannot be null');
        }
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets clickUrl
     *
     * @return string|null
     */
    public function getClickUrl()
    {
        return $this->container['clickUrl'];
    }

    /**
     * Sets clickUrl
     *
     * @param string|null $clickUrl The URL that was specified when the audience was created. This is only included when `audienceGroup.type` is CLICK and link URL is specified.
     *
     * @return self
     */
    public function setClickUrl($clickUrl)
    {
        if (is_null($clickUrl)) {
            throw new \InvalidArgumentException('non-nullable clickUrl cannot be null');
        }
        $this->container['clickUrl'] = $clickUrl;

        return $this;
    }

    /**
     * Gets isIfaAudience
     *
     * @return bool|null
     */
    public function getIsIfaAudience()
    {
        return $this->container['isIfaAudience'];
    }

    /**
     * Sets isIfaAudience
     *
     * @param bool|null $isIfaAudience The value indicating the type of account to be sent, as specified when creating the audience for uploading user IDs.
     *
     * @return self
     */
    public function setIsIfaAudience($isIfaAudience)
    {
        if (is_null($isIfaAudience)) {
            throw new \InvalidArgumentException('non-nullable isIfaAudience cannot be null');
        }
        $this->container['isIfaAudience'] = $isIfaAudience;

        return $this;
    }

    /**
     * Gets permission
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroupPermission|null
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroupPermission|null $permission permission
     *
     * @return self
     */
    public function setPermission($permission)
    {
        if (is_null($permission)) {
            throw new \InvalidArgumentException('non-nullable permission cannot be null');
        }
        $this->container['permission'] = $permission;

        return $this;
    }

    /**
     * Gets createRoute
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroupCreateRoute|null
     */
    public function getCreateRoute()
    {
        return $this->container['createRoute'];
    }

    /**
     * Sets createRoute
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroupCreateRoute|null $createRoute createRoute
     *
     * @return self
     */
    public function setCreateRoute($createRoute)
    {
        if (is_null($createRoute)) {
            throw new \InvalidArgumentException('non-nullable createRoute cannot be null');
        }
        $this->container['createRoute'] = $createRoute;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


