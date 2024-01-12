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
 * GetNumberOfMessageDeliveriesResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\Clients\Insight
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LINE Messaging API(Insight)
 *
 * This document describes LINE Messaging API(Insight).
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

namespace LINE\Clients\Insight\Model;

use \ArrayAccess;
use \LINE\Clients\Insight\ObjectSerializer;

/**
 * GetNumberOfMessageDeliveriesResponse Class Doc Comment
 *
 * @category Class
 * @description Get number of message deliveries
 * @package  LINE\Clients\Insight
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetNumberOfMessageDeliveriesResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetNumberOfMessageDeliveriesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'broadcast' => 'int',
        'targeting' => 'int',
        'autoResponse' => 'int',
        'welcomeResponse' => 'int',
        'chat' => 'int',
        'apiBroadcast' => 'int',
        'apiPush' => 'int',
        'apiMulticast' => 'int',
        'apiNarrowcast' => 'int',
        'apiReply' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'broadcast' => 'int64',
        'targeting' => 'int64',
        'autoResponse' => 'int64',
        'welcomeResponse' => 'int64',
        'chat' => 'int64',
        'apiBroadcast' => 'int64',
        'apiPush' => 'int64',
        'apiMulticast' => 'int64',
        'apiNarrowcast' => 'int64',
        'apiReply' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
		'broadcast' => false,
		'targeting' => false,
		'autoResponse' => false,
		'welcomeResponse' => false,
		'chat' => false,
		'apiBroadcast' => false,
		'apiPush' => false,
		'apiMulticast' => false,
		'apiNarrowcast' => false,
		'apiReply' => false
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
        'status' => 'status',
        'broadcast' => 'broadcast',
        'targeting' => 'targeting',
        'autoResponse' => 'autoResponse',
        'welcomeResponse' => 'welcomeResponse',
        'chat' => 'chat',
        'apiBroadcast' => 'apiBroadcast',
        'apiPush' => 'apiPush',
        'apiMulticast' => 'apiMulticast',
        'apiNarrowcast' => 'apiNarrowcast',
        'apiReply' => 'apiReply'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'broadcast' => 'setBroadcast',
        'targeting' => 'setTargeting',
        'autoResponse' => 'setAutoResponse',
        'welcomeResponse' => 'setWelcomeResponse',
        'chat' => 'setChat',
        'apiBroadcast' => 'setApiBroadcast',
        'apiPush' => 'setApiPush',
        'apiMulticast' => 'setApiMulticast',
        'apiNarrowcast' => 'setApiNarrowcast',
        'apiReply' => 'setApiReply'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'broadcast' => 'getBroadcast',
        'targeting' => 'getTargeting',
        'autoResponse' => 'getAutoResponse',
        'welcomeResponse' => 'getWelcomeResponse',
        'chat' => 'getChat',
        'apiBroadcast' => 'getApiBroadcast',
        'apiPush' => 'getApiPush',
        'apiMulticast' => 'getApiMulticast',
        'apiNarrowcast' => 'getApiNarrowcast',
        'apiReply' => 'getApiReply'
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

    public const STATUS_READY = 'ready';
    public const STATUS_UNREADY = 'unready';
    public const STATUS_OUT_OF_SERVICE = 'out_of_service';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_READY,
            self::STATUS_UNREADY,
            self::STATUS_OUT_OF_SERVICE,
        ];
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('broadcast', $data ?? [], null);
        $this->setIfExists('targeting', $data ?? [], null);
        $this->setIfExists('autoResponse', $data ?? [], null);
        $this->setIfExists('welcomeResponse', $data ?? [], null);
        $this->setIfExists('chat', $data ?? [], null);
        $this->setIfExists('apiBroadcast', $data ?? [], null);
        $this->setIfExists('apiPush', $data ?? [], null);
        $this->setIfExists('apiMulticast', $data ?? [], null);
        $this->setIfExists('apiNarrowcast', $data ?? [], null);
        $this->setIfExists('apiReply', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the counting process.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets broadcast
     *
     * @return int|null
     */
    public function getBroadcast()
    {
        return $this->container['broadcast'];
    }

    /**
     * Sets broadcast
     *
     * @param int|null $broadcast Number of messages sent to all of this LINE Official Account's friends (broadcast messages).
     *
     * @return self
     */
    public function setBroadcast($broadcast)
    {
        if (is_null($broadcast)) {
            throw new \InvalidArgumentException('non-nullable broadcast cannot be null');
        }
        $this->container['broadcast'] = $broadcast;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return int|null
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param int|null $targeting Number of messages sent to some of this LINE Official Account's friends, based on specific attributes (targeted messages).
     *
     * @return self
     */
    public function setTargeting($targeting)
    {
        if (is_null($targeting)) {
            throw new \InvalidArgumentException('non-nullable targeting cannot be null');
        }
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets autoResponse
     *
     * @return int|null
     */
    public function getAutoResponse()
    {
        return $this->container['autoResponse'];
    }

    /**
     * Sets autoResponse
     *
     * @param int|null $autoResponse Number of auto-response messages sent.
     *
     * @return self
     */
    public function setAutoResponse($autoResponse)
    {
        if (is_null($autoResponse)) {
            throw new \InvalidArgumentException('non-nullable autoResponse cannot be null');
        }
        $this->container['autoResponse'] = $autoResponse;

        return $this;
    }

    /**
     * Gets welcomeResponse
     *
     * @return int|null
     */
    public function getWelcomeResponse()
    {
        return $this->container['welcomeResponse'];
    }

    /**
     * Sets welcomeResponse
     *
     * @param int|null $welcomeResponse Number of greeting messages sent.
     *
     * @return self
     */
    public function setWelcomeResponse($welcomeResponse)
    {
        if (is_null($welcomeResponse)) {
            throw new \InvalidArgumentException('non-nullable welcomeResponse cannot be null');
        }
        $this->container['welcomeResponse'] = $welcomeResponse;

        return $this;
    }

    /**
     * Gets chat
     *
     * @return int|null
     */
    public function getChat()
    {
        return $this->container['chat'];
    }

    /**
     * Sets chat
     *
     * @param int|null $chat Number of messages sent from LINE Official Account Manager [Chat screen](https://www.linebiz.com/jp/manual/OfficialAccountManager/chats/) (only available in Japanese).
     *
     * @return self
     */
    public function setChat($chat)
    {
        if (is_null($chat)) {
            throw new \InvalidArgumentException('non-nullable chat cannot be null');
        }
        $this->container['chat'] = $chat;

        return $this;
    }

    /**
     * Gets apiBroadcast
     *
     * @return int|null
     */
    public function getApiBroadcast()
    {
        return $this->container['apiBroadcast'];
    }

    /**
     * Sets apiBroadcast
     *
     * @param int|null $apiBroadcast Number of broadcast messages sent with the `Send broadcast message` Messaging API operation.
     *
     * @return self
     */
    public function setApiBroadcast($apiBroadcast)
    {
        if (is_null($apiBroadcast)) {
            throw new \InvalidArgumentException('non-nullable apiBroadcast cannot be null');
        }
        $this->container['apiBroadcast'] = $apiBroadcast;

        return $this;
    }

    /**
     * Gets apiPush
     *
     * @return int|null
     */
    public function getApiPush()
    {
        return $this->container['apiPush'];
    }

    /**
     * Sets apiPush
     *
     * @param int|null $apiPush Number of push messages sent with the `Send push message` Messaging API operation.
     *
     * @return self
     */
    public function setApiPush($apiPush)
    {
        if (is_null($apiPush)) {
            throw new \InvalidArgumentException('non-nullable apiPush cannot be null');
        }
        $this->container['apiPush'] = $apiPush;

        return $this;
    }

    /**
     * Gets apiMulticast
     *
     * @return int|null
     */
    public function getApiMulticast()
    {
        return $this->container['apiMulticast'];
    }

    /**
     * Sets apiMulticast
     *
     * @param int|null $apiMulticast Number of multicast messages sent with the `Send multicast message` Messaging API operation.
     *
     * @return self
     */
    public function setApiMulticast($apiMulticast)
    {
        if (is_null($apiMulticast)) {
            throw new \InvalidArgumentException('non-nullable apiMulticast cannot be null');
        }
        $this->container['apiMulticast'] = $apiMulticast;

        return $this;
    }

    /**
     * Gets apiNarrowcast
     *
     * @return int|null
     */
    public function getApiNarrowcast()
    {
        return $this->container['apiNarrowcast'];
    }

    /**
     * Sets apiNarrowcast
     *
     * @param int|null $apiNarrowcast Number of narrowcast messages sent with the `Send narrowcast message` Messaging API operation.
     *
     * @return self
     */
    public function setApiNarrowcast($apiNarrowcast)
    {
        if (is_null($apiNarrowcast)) {
            throw new \InvalidArgumentException('non-nullable apiNarrowcast cannot be null');
        }
        $this->container['apiNarrowcast'] = $apiNarrowcast;

        return $this;
    }

    /**
     * Gets apiReply
     *
     * @return int|null
     */
    public function getApiReply()
    {
        return $this->container['apiReply'];
    }

    /**
     * Sets apiReply
     *
     * @param int|null $apiReply Number of replies sent with the `Send reply message` Messaging API operation.
     *
     * @return self
     */
    public function setApiReply($apiReply)
    {
        if (is_null($apiReply)) {
            throw new \InvalidArgumentException('non-nullable apiReply cannot be null');
        }
        $this->container['apiReply'] = $apiReply;

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


