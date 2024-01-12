<?php
/**
 * Copyright 2024 LINE Corporation
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
 * MulticastRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
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

namespace LINE\Clients\MessagingApi\Model;

use \ArrayAccess;
use \LINE\Clients\MessagingApi\ObjectSerializer;

/**
 * MulticastRequest Class Doc Comment
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MulticastRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MulticastRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'messages' => '\LINE\Clients\MessagingApi\Model\Message[]',
        'to' => 'string[]',
        'notificationDisabled' => 'bool',
        'customAggregationUnits' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'messages' => null,
        'to' => null,
        'notificationDisabled' => null,
        'customAggregationUnits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'messages' => false,
		'to' => false,
		'notificationDisabled' => false,
		'customAggregationUnits' => false
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
        'messages' => 'messages',
        'to' => 'to',
        'notificationDisabled' => 'notificationDisabled',
        'customAggregationUnits' => 'customAggregationUnits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'messages' => 'setMessages',
        'to' => 'setTo',
        'notificationDisabled' => 'setNotificationDisabled',
        'customAggregationUnits' => 'setCustomAggregationUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'messages' => 'getMessages',
        'to' => 'getTo',
        'notificationDisabled' => 'getNotificationDisabled',
        'customAggregationUnits' => 'getCustomAggregationUnits'
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
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('notificationDisabled', $data ?? [], false);
        $this->setIfExists('customAggregationUnits', $data ?? [], null);
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

        if ($this->container['messages'] === null) {
            $invalidProperties[] = "'messages' can't be null";
        }
        if ((count($this->container['messages']) > 5)) {
            $invalidProperties[] = "invalid value for 'messages', number of items must be less than or equal to 5.";
        }

        if ((count($this->container['messages']) < 1)) {
            $invalidProperties[] = "invalid value for 'messages', number of items must be greater than or equal to 1.";
        }

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ((count($this->container['to']) > 500)) {
            $invalidProperties[] = "invalid value for 'to', number of items must be less than or equal to 500.";
        }

        if ((count($this->container['to']) < 1)) {
            $invalidProperties[] = "invalid value for 'to', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['customAggregationUnits']) && (count($this->container['customAggregationUnits']) > 1)) {
            $invalidProperties[] = "invalid value for 'customAggregationUnits', number of items must be less than or equal to 1.";
        }

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
     * Gets messages
     *
     * @return \LINE\Clients\MessagingApi\Model\Message[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \LINE\Clients\MessagingApi\Model\Message[] $messages Messages to send
     *
     * @return self
     */
    public function setMessages($messages)
    {
        if (is_null($messages)) {
            throw new \InvalidArgumentException('non-nullable messages cannot be null');
        }

        if ((count($messages) > 5)) {
            throw new \InvalidArgumentException('invalid value for $messages when calling MulticastRequest., number of items must be less than or equal to 5.');
        }
        if ((count($messages) < 1)) {
            throw new \InvalidArgumentException('invalid length for $messages when calling MulticastRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string[] $to Array of user IDs. Use userId values which are returned in webhook event objects. Do not use LINE IDs found on LINE.
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }

        if ((count($to) > 500)) {
            throw new \InvalidArgumentException('invalid value for $to when calling MulticastRequest., number of items must be less than or equal to 500.');
        }
        if ((count($to) < 1)) {
            throw new \InvalidArgumentException('invalid length for $to when calling MulticastRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets notificationDisabled
     *
     * @return bool|null
     */
    public function getNotificationDisabled()
    {
        return $this->container['notificationDisabled'];
    }

    /**
     * Sets notificationDisabled
     *
     * @param bool|null $notificationDisabled `true`: The user doesn’t receive a push notification when a message is sent. `false`: The user receives a push notification when the message is sent (unless they have disabled push notifications in LINE and/or their device). The default value is false.
     *
     * @return self
     */
    public function setNotificationDisabled($notificationDisabled)
    {
        if (is_null($notificationDisabled)) {
            throw new \InvalidArgumentException('non-nullable notificationDisabled cannot be null');
        }
        $this->container['notificationDisabled'] = $notificationDisabled;

        return $this;
    }

    /**
     * Gets customAggregationUnits
     *
     * @return string[]|null
     */
    public function getCustomAggregationUnits()
    {
        return $this->container['customAggregationUnits'];
    }

    /**
     * Sets customAggregationUnits
     *
     * @param string[]|null $customAggregationUnits Name of aggregation unit. Case-sensitive.
     *
     * @return self
     */
    public function setCustomAggregationUnits($customAggregationUnits)
    {
        if (is_null($customAggregationUnits)) {
            throw new \InvalidArgumentException('non-nullable customAggregationUnits cannot be null');
        }

        if ((count($customAggregationUnits) > 1)) {
            throw new \InvalidArgumentException('invalid value for $customAggregationUnits when calling MulticastRequest., number of items must be less than or equal to 1.');
        }
        $this->container['customAggregationUnits'] = $customAggregationUnits;

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


