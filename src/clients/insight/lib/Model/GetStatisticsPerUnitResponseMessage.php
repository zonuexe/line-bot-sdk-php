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
 * GetStatisticsPerUnitResponseMessage
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\\Clients\\Insight
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

namespace LINE\\Clients\\Insight\Model;

use \ArrayAccess;
use \LINE\\Clients\\Insight\ObjectSerializer;

/**
 * GetStatisticsPerUnitResponseMessage Class Doc Comment
 *
 * @category Class
 * @package  LINE\\Clients\\Insight
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetStatisticsPerUnitResponseMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetStatisticsPerUnitResponseMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seq' => 'int',
        'impression' => 'int',
        'mediaPlayed' => 'int',
        'mediaPlayed25Percent' => 'int',
        'mediaPlayed50Percent' => 'int',
        'mediaPlayed75Percent' => 'int',
        'mediaPlayed100Percent' => 'int',
        'uniqueImpression' => 'int',
        'uniqueMediaPlayed' => 'int',
        'uniqueMediaPlayed25Percent' => 'int',
        'uniqueMediaPlayed50Percent' => 'int',
        'uniqueMediaPlayed75Percent' => 'int',
        'uniqueMediaPlayed100Percent' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seq' => 'int32',
        'impression' => 'int64',
        'mediaPlayed' => 'int64',
        'mediaPlayed25Percent' => 'int64',
        'mediaPlayed50Percent' => 'int64',
        'mediaPlayed75Percent' => 'int64',
        'mediaPlayed100Percent' => 'int64',
        'uniqueImpression' => 'int64',
        'uniqueMediaPlayed' => 'int64',
        'uniqueMediaPlayed25Percent' => 'int64',
        'uniqueMediaPlayed50Percent' => 'int64',
        'uniqueMediaPlayed75Percent' => 'int64',
        'uniqueMediaPlayed100Percent' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'seq' => false,
		'impression' => true,
		'mediaPlayed' => true,
		'mediaPlayed25Percent' => true,
		'mediaPlayed50Percent' => true,
		'mediaPlayed75Percent' => true,
		'mediaPlayed100Percent' => true,
		'uniqueImpression' => true,
		'uniqueMediaPlayed' => true,
		'uniqueMediaPlayed25Percent' => true,
		'uniqueMediaPlayed50Percent' => true,
		'uniqueMediaPlayed75Percent' => true,
		'uniqueMediaPlayed100Percent' => true
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
        'seq' => 'seq',
        'impression' => 'impression',
        'mediaPlayed' => 'mediaPlayed',
        'mediaPlayed25Percent' => 'mediaPlayed25Percent',
        'mediaPlayed50Percent' => 'mediaPlayed50Percent',
        'mediaPlayed75Percent' => 'mediaPlayed75Percent',
        'mediaPlayed100Percent' => 'mediaPlayed100Percent',
        'uniqueImpression' => 'uniqueImpression',
        'uniqueMediaPlayed' => 'uniqueMediaPlayed',
        'uniqueMediaPlayed25Percent' => 'uniqueMediaPlayed25Percent',
        'uniqueMediaPlayed50Percent' => 'uniqueMediaPlayed50Percent',
        'uniqueMediaPlayed75Percent' => 'uniqueMediaPlayed75Percent',
        'uniqueMediaPlayed100Percent' => 'uniqueMediaPlayed100Percent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seq' => 'setSeq',
        'impression' => 'setImpression',
        'mediaPlayed' => 'setMediaPlayed',
        'mediaPlayed25Percent' => 'setMediaPlayed25Percent',
        'mediaPlayed50Percent' => 'setMediaPlayed50Percent',
        'mediaPlayed75Percent' => 'setMediaPlayed75Percent',
        'mediaPlayed100Percent' => 'setMediaPlayed100Percent',
        'uniqueImpression' => 'setUniqueImpression',
        'uniqueMediaPlayed' => 'setUniqueMediaPlayed',
        'uniqueMediaPlayed25Percent' => 'setUniqueMediaPlayed25Percent',
        'uniqueMediaPlayed50Percent' => 'setUniqueMediaPlayed50Percent',
        'uniqueMediaPlayed75Percent' => 'setUniqueMediaPlayed75Percent',
        'uniqueMediaPlayed100Percent' => 'setUniqueMediaPlayed100Percent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seq' => 'getSeq',
        'impression' => 'getImpression',
        'mediaPlayed' => 'getMediaPlayed',
        'mediaPlayed25Percent' => 'getMediaPlayed25Percent',
        'mediaPlayed50Percent' => 'getMediaPlayed50Percent',
        'mediaPlayed75Percent' => 'getMediaPlayed75Percent',
        'mediaPlayed100Percent' => 'getMediaPlayed100Percent',
        'uniqueImpression' => 'getUniqueImpression',
        'uniqueMediaPlayed' => 'getUniqueMediaPlayed',
        'uniqueMediaPlayed25Percent' => 'getUniqueMediaPlayed25Percent',
        'uniqueMediaPlayed50Percent' => 'getUniqueMediaPlayed50Percent',
        'uniqueMediaPlayed75Percent' => 'getUniqueMediaPlayed75Percent',
        'uniqueMediaPlayed100Percent' => 'getUniqueMediaPlayed100Percent'
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
        $this->setIfExists('seq', $data ?? [], null);
        $this->setIfExists('impression', $data ?? [], null);
        $this->setIfExists('mediaPlayed', $data ?? [], null);
        $this->setIfExists('mediaPlayed25Percent', $data ?? [], null);
        $this->setIfExists('mediaPlayed50Percent', $data ?? [], null);
        $this->setIfExists('mediaPlayed75Percent', $data ?? [], null);
        $this->setIfExists('mediaPlayed100Percent', $data ?? [], null);
        $this->setIfExists('uniqueImpression', $data ?? [], null);
        $this->setIfExists('uniqueMediaPlayed', $data ?? [], null);
        $this->setIfExists('uniqueMediaPlayed25Percent', $data ?? [], null);
        $this->setIfExists('uniqueMediaPlayed50Percent', $data ?? [], null);
        $this->setIfExists('uniqueMediaPlayed75Percent', $data ?? [], null);
        $this->setIfExists('uniqueMediaPlayed100Percent', $data ?? [], null);
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

        if ($this->container['seq'] === null) {
            $invalidProperties[] = "'seq' can't be null";
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
     * Gets seq
     *
     * @return int
     */
    public function getSeq()
    {
        return $this->container['seq'];
    }

    /**
     * Sets seq
     *
     * @param int $seq Bubble's serial number.
     *
     * @return self
     */
    public function setSeq($seq)
    {
        if (is_null($seq)) {
            throw new \InvalidArgumentException('non-nullable seq cannot be null');
        }
        $this->container['seq'] = $seq;

        return $this;
    }

    /**
     * Gets impression
     *
     * @return int|null
     */
    public function getImpression()
    {
        return $this->container['impression'];
    }

    /**
     * Sets impression
     *
     * @param int|null $impression Number of times the bubble was displayed.
     *
     * @return self
     */
    public function setImpression($impression)
    {
        if (is_null($impression)) {
            array_push($this->openAPINullablesSetToNull, 'impression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('impression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['impression'] = $impression;

        return $this;
    }

    /**
     * Gets mediaPlayed
     *
     * @return int|null
     */
    public function getMediaPlayed()
    {
        return $this->container['mediaPlayed'];
    }

    /**
     * Sets mediaPlayed
     *
     * @param int|null $mediaPlayed Number of times audio or video in the bubble started playing.
     *
     * @return self
     */
    public function setMediaPlayed($mediaPlayed)
    {
        if (is_null($mediaPlayed)) {
            array_push($this->openAPINullablesSetToNull, 'mediaPlayed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mediaPlayed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mediaPlayed'] = $mediaPlayed;

        return $this;
    }

    /**
     * Gets mediaPlayed25Percent
     *
     * @return int|null
     */
    public function getMediaPlayed25Percent()
    {
        return $this->container['mediaPlayed25Percent'];
    }

    /**
     * Sets mediaPlayed25Percent
     *
     * @param int|null $mediaPlayed25Percent Number of times audio or video in the bubble started playing and was played 25% of the total time.
     *
     * @return self
     */
    public function setMediaPlayed25Percent($mediaPlayed25Percent)
    {
        if (is_null($mediaPlayed25Percent)) {
            array_push($this->openAPINullablesSetToNull, 'mediaPlayed25Percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mediaPlayed25Percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mediaPlayed25Percent'] = $mediaPlayed25Percent;

        return $this;
    }

    /**
     * Gets mediaPlayed50Percent
     *
     * @return int|null
     */
    public function getMediaPlayed50Percent()
    {
        return $this->container['mediaPlayed50Percent'];
    }

    /**
     * Sets mediaPlayed50Percent
     *
     * @param int|null $mediaPlayed50Percent Number of times audio or video in the bubble started playing and was played 50% of the total time.
     *
     * @return self
     */
    public function setMediaPlayed50Percent($mediaPlayed50Percent)
    {
        if (is_null($mediaPlayed50Percent)) {
            array_push($this->openAPINullablesSetToNull, 'mediaPlayed50Percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mediaPlayed50Percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mediaPlayed50Percent'] = $mediaPlayed50Percent;

        return $this;
    }

    /**
     * Gets mediaPlayed75Percent
     *
     * @return int|null
     */
    public function getMediaPlayed75Percent()
    {
        return $this->container['mediaPlayed75Percent'];
    }

    /**
     * Sets mediaPlayed75Percent
     *
     * @param int|null $mediaPlayed75Percent Number of times audio or video in the bubble started playing and was played 75% of the total time.
     *
     * @return self
     */
    public function setMediaPlayed75Percent($mediaPlayed75Percent)
    {
        if (is_null($mediaPlayed75Percent)) {
            array_push($this->openAPINullablesSetToNull, 'mediaPlayed75Percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mediaPlayed75Percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mediaPlayed75Percent'] = $mediaPlayed75Percent;

        return $this;
    }

    /**
     * Gets mediaPlayed100Percent
     *
     * @return int|null
     */
    public function getMediaPlayed100Percent()
    {
        return $this->container['mediaPlayed100Percent'];
    }

    /**
     * Sets mediaPlayed100Percent
     *
     * @param int|null $mediaPlayed100Percent Number of times audio or video in the bubble started playing and was played 100% of the total time.
     *
     * @return self
     */
    public function setMediaPlayed100Percent($mediaPlayed100Percent)
    {
        if (is_null($mediaPlayed100Percent)) {
            array_push($this->openAPINullablesSetToNull, 'mediaPlayed100Percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mediaPlayed100Percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mediaPlayed100Percent'] = $mediaPlayed100Percent;

        return $this;
    }

    /**
     * Gets uniqueImpression
     *
     * @return int|null
     */
    public function getUniqueImpression()
    {
        return $this->container['uniqueImpression'];
    }

    /**
     * Sets uniqueImpression
     *
     * @param int|null $uniqueImpression Number of users the bubble was displayed.
     *
     * @return self
     */
    public function setUniqueImpression($uniqueImpression)
    {
        if (is_null($uniqueImpression)) {
            array_push($this->openAPINullablesSetToNull, 'uniqueImpression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uniqueImpression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uniqueImpression'] = $uniqueImpression;

        return $this;
    }

    /**
     * Gets uniqueMediaPlayed
     *
     * @return int|null
     */
    public function getUniqueMediaPlayed()
    {
        return $this->container['uniqueMediaPlayed'];
    }

    /**
     * Sets uniqueMediaPlayed
     *
     * @param int|null $uniqueMediaPlayed Number of users that started playing audio or video in the bubble.
     *
     * @return self
     */
    public function setUniqueMediaPlayed($uniqueMediaPlayed)
    {
        if (is_null($uniqueMediaPlayed)) {
            array_push($this->openAPINullablesSetToNull, 'uniqueMediaPlayed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uniqueMediaPlayed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uniqueMediaPlayed'] = $uniqueMediaPlayed;

        return $this;
    }

    /**
     * Gets uniqueMediaPlayed25Percent
     *
     * @return int|null
     */
    public function getUniqueMediaPlayed25Percent()
    {
        return $this->container['uniqueMediaPlayed25Percent'];
    }

    /**
     * Sets uniqueMediaPlayed25Percent
     *
     * @param int|null $uniqueMediaPlayed25Percent Number of users that started playing audio or video in the bubble and played 25% of the total time.
     *
     * @return self
     */
    public function setUniqueMediaPlayed25Percent($uniqueMediaPlayed25Percent)
    {
        if (is_null($uniqueMediaPlayed25Percent)) {
            array_push($this->openAPINullablesSetToNull, 'uniqueMediaPlayed25Percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uniqueMediaPlayed25Percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uniqueMediaPlayed25Percent'] = $uniqueMediaPlayed25Percent;

        return $this;
    }

    /**
     * Gets uniqueMediaPlayed50Percent
     *
     * @return int|null
     */
    public function getUniqueMediaPlayed50Percent()
    {
        return $this->container['uniqueMediaPlayed50Percent'];
    }

    /**
     * Sets uniqueMediaPlayed50Percent
     *
     * @param int|null $uniqueMediaPlayed50Percent Number of users that started playing audio or video in the bubble and played 50% of the total time.
     *
     * @return self
     */
    public function setUniqueMediaPlayed50Percent($uniqueMediaPlayed50Percent)
    {
        if (is_null($uniqueMediaPlayed50Percent)) {
            array_push($this->openAPINullablesSetToNull, 'uniqueMediaPlayed50Percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uniqueMediaPlayed50Percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uniqueMediaPlayed50Percent'] = $uniqueMediaPlayed50Percent;

        return $this;
    }

    /**
     * Gets uniqueMediaPlayed75Percent
     *
     * @return int|null
     */
    public function getUniqueMediaPlayed75Percent()
    {
        return $this->container['uniqueMediaPlayed75Percent'];
    }

    /**
     * Sets uniqueMediaPlayed75Percent
     *
     * @param int|null $uniqueMediaPlayed75Percent Number of users that started playing audio or video in the bubble and played 75% of the total time.
     *
     * @return self
     */
    public function setUniqueMediaPlayed75Percent($uniqueMediaPlayed75Percent)
    {
        if (is_null($uniqueMediaPlayed75Percent)) {
            array_push($this->openAPINullablesSetToNull, 'uniqueMediaPlayed75Percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uniqueMediaPlayed75Percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uniqueMediaPlayed75Percent'] = $uniqueMediaPlayed75Percent;

        return $this;
    }

    /**
     * Gets uniqueMediaPlayed100Percent
     *
     * @return int|null
     */
    public function getUniqueMediaPlayed100Percent()
    {
        return $this->container['uniqueMediaPlayed100Percent'];
    }

    /**
     * Sets uniqueMediaPlayed100Percent
     *
     * @param int|null $uniqueMediaPlayed100Percent Number of users that started playing audio or video in the bubble and played 100% of the total time.
     *
     * @return self
     */
    public function setUniqueMediaPlayed100Percent($uniqueMediaPlayed100Percent)
    {
        if (is_null($uniqueMediaPlayed100Percent)) {
            array_push($this->openAPINullablesSetToNull, 'uniqueMediaPlayed100Percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uniqueMediaPlayed100Percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uniqueMediaPlayed100Percent'] = $uniqueMediaPlayed100Percent;

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


