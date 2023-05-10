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
 * GetAudienceGroupsResponse
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
 * GetAudienceGroupsResponse Class Doc Comment
 *
 * @category Class
 * @description Gets data for more than one audience.
 * @package  LINE\Clients\ManageAudience
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetAudienceGroupsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetAudienceGroupsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audienceGroups' => '\LINE\Clients\ManageAudience\Model\AudienceGroup[]',
        'hasNextPage' => 'bool',
        'totalCount' => 'int',
        'readWriteAudienceGroupTotalCount' => 'int',
        'page' => 'int',
        'size' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audienceGroups' => null,
        'hasNextPage' => null,
        'totalCount' => 'int64',
        'readWriteAudienceGroupTotalCount' => 'int64',
        'page' => 'int64',
        'size' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audienceGroups' => false,
		'hasNextPage' => false,
		'totalCount' => false,
		'readWriteAudienceGroupTotalCount' => false,
		'page' => false,
		'size' => false
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
        'audienceGroups' => 'audienceGroups',
        'hasNextPage' => 'hasNextPage',
        'totalCount' => 'totalCount',
        'readWriteAudienceGroupTotalCount' => 'readWriteAudienceGroupTotalCount',
        'page' => 'page',
        'size' => 'size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audienceGroups' => 'setAudienceGroups',
        'hasNextPage' => 'setHasNextPage',
        'totalCount' => 'setTotalCount',
        'readWriteAudienceGroupTotalCount' => 'setReadWriteAudienceGroupTotalCount',
        'page' => 'setPage',
        'size' => 'setSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audienceGroups' => 'getAudienceGroups',
        'hasNextPage' => 'getHasNextPage',
        'totalCount' => 'getTotalCount',
        'readWriteAudienceGroupTotalCount' => 'getReadWriteAudienceGroupTotalCount',
        'page' => 'getPage',
        'size' => 'getSize'
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
        $this->setIfExists('audienceGroups', $data ?? [], null);
        $this->setIfExists('hasNextPage', $data ?? [], null);
        $this->setIfExists('totalCount', $data ?? [], null);
        $this->setIfExists('readWriteAudienceGroupTotalCount', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
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
     * Gets audienceGroups
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroup[]|null
     */
    public function getAudienceGroups()
    {
        return $this->container['audienceGroups'];
    }

    /**
     * Sets audienceGroups
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroup[]|null $audienceGroups An array of audience data. If there are no audiences that match the specified filter, an empty array will be returned.
     *
     * @return self
     */
    public function setAudienceGroups($audienceGroups)
    {
        if (is_null($audienceGroups)) {
            throw new \InvalidArgumentException('non-nullable audienceGroups cannot be null');
        }
        $this->container['audienceGroups'] = $audienceGroups;

        return $this;
    }

    /**
     * Gets hasNextPage
     *
     * @return bool|null
     */
    public function getHasNextPage()
    {
        return $this->container['hasNextPage'];
    }

    /**
     * Sets hasNextPage
     *
     * @param bool|null $hasNextPage true when this is not the last page.
     *
     * @return self
     */
    public function setHasNextPage($hasNextPage)
    {
        if (is_null($hasNextPage)) {
            throw new \InvalidArgumentException('non-nullable hasNextPage cannot be null');
        }
        $this->container['hasNextPage'] = $hasNextPage;

        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount The total number of audiences that can be returned with the specified filter.
     *
     * @return self
     */
    public function setTotalCount($totalCount)
    {
        if (is_null($totalCount)) {
            throw new \InvalidArgumentException('non-nullable totalCount cannot be null');
        }
        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets readWriteAudienceGroupTotalCount
     *
     * @return int|null
     */
    public function getReadWriteAudienceGroupTotalCount()
    {
        return $this->container['readWriteAudienceGroupTotalCount'];
    }

    /**
     * Sets readWriteAudienceGroupTotalCount
     *
     * @param int|null $readWriteAudienceGroupTotalCount Of the audiences you can get with the specified filter, the number of audiences with the update permission set to READ_WRITE.
     *
     * @return self
     */
    public function setReadWriteAudienceGroupTotalCount($readWriteAudienceGroupTotalCount)
    {
        if (is_null($readWriteAudienceGroupTotalCount)) {
            throw new \InvalidArgumentException('non-nullable readWriteAudienceGroupTotalCount cannot be null');
        }
        $this->container['readWriteAudienceGroupTotalCount'] = $readWriteAudienceGroupTotalCount;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page The current page number.
     *
     * @return self
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size The maximum number of audiences on the current page.
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

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


