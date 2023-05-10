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
 * AudienceGroupJob
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
 * AudienceGroupJob Class Doc Comment
 *
 * @category Class
 * @description Audience group job
 * @package  LINE\Clients\ManageAudience
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AudienceGroupJob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AudienceGroupJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audienceGroupJobId' => 'int',
        'audienceGroupId' => 'int',
        'description' => 'string',
        'type' => '\LINE\Clients\ManageAudience\Model\AudienceGroupJobType',
        'jobStatus' => '\LINE\Clients\ManageAudience\Model\AudienceGroupJobStatus',
        'failedType' => '\LINE\Clients\ManageAudience\Model\AudienceGroupJobFailedType',
        'audienceCount' => 'int',
        'created' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audienceGroupJobId' => 'int64',
        'audienceGroupId' => 'int64',
        'description' => null,
        'type' => null,
        'jobStatus' => null,
        'failedType' => null,
        'audienceCount' => 'int64',
        'created' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audienceGroupJobId' => false,
		'audienceGroupId' => false,
		'description' => false,
		'type' => false,
		'jobStatus' => false,
		'failedType' => false,
		'audienceCount' => false,
		'created' => false
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
        'audienceGroupJobId' => 'audienceGroupJobId',
        'audienceGroupId' => 'audienceGroupId',
        'description' => 'description',
        'type' => 'type',
        'jobStatus' => 'jobStatus',
        'failedType' => 'failedType',
        'audienceCount' => 'audienceCount',
        'created' => 'created'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audienceGroupJobId' => 'setAudienceGroupJobId',
        'audienceGroupId' => 'setAudienceGroupId',
        'description' => 'setDescription',
        'type' => 'setType',
        'jobStatus' => 'setJobStatus',
        'failedType' => 'setFailedType',
        'audienceCount' => 'setAudienceCount',
        'created' => 'setCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audienceGroupJobId' => 'getAudienceGroupJobId',
        'audienceGroupId' => 'getAudienceGroupId',
        'description' => 'getDescription',
        'type' => 'getType',
        'jobStatus' => 'getJobStatus',
        'failedType' => 'getFailedType',
        'audienceCount' => 'getAudienceCount',
        'created' => 'getCreated'
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
        $this->setIfExists('audienceGroupJobId', $data ?? [], null);
        $this->setIfExists('audienceGroupId', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('jobStatus', $data ?? [], null);
        $this->setIfExists('failedType', $data ?? [], null);
        $this->setIfExists('audienceCount', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
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
     * Gets audienceGroupJobId
     *
     * @return int|null
     */
    public function getAudienceGroupJobId()
    {
        return $this->container['audienceGroupJobId'];
    }

    /**
     * Sets audienceGroupJobId
     *
     * @param int|null $audienceGroupJobId A job ID.
     *
     * @return self
     */
    public function setAudienceGroupJobId($audienceGroupJobId)
    {
        if (is_null($audienceGroupJobId)) {
            throw new \InvalidArgumentException('non-nullable audienceGroupJobId cannot be null');
        }
        $this->container['audienceGroupJobId'] = $audienceGroupJobId;

        return $this;
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
     * @param int|null $audienceGroupId An audience ID.
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
     * @param string|null $description The job's description.
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
     * Gets type
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroupJobType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroupJobType|null $type type
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
     * Gets jobStatus
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroupJobStatus|null
     */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
     * Sets jobStatus
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroupJobStatus|null $jobStatus jobStatus
     *
     * @return self
     */
    public function setJobStatus($jobStatus)
    {
        if (is_null($jobStatus)) {
            throw new \InvalidArgumentException('non-nullable jobStatus cannot be null');
        }
        $this->container['jobStatus'] = $jobStatus;

        return $this;
    }

    /**
     * Gets failedType
     *
     * @return \LINE\Clients\ManageAudience\Model\AudienceGroupJobFailedType|null
     */
    public function getFailedType()
    {
        return $this->container['failedType'];
    }

    /**
     * Sets failedType
     *
     * @param \LINE\Clients\ManageAudience\Model\AudienceGroupJobFailedType|null $failedType failedType
     *
     * @return self
     */
    public function setFailedType($failedType)
    {
        if (is_null($failedType)) {
            throw new \InvalidArgumentException('non-nullable failedType cannot be null');
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
     * @param int|null $audienceCount The number of accounts (recipients) that were added or removed.
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
     * @param int|null $created When the job was created (in UNIX time).
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


