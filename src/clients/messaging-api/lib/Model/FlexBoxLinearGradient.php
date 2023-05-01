<?php
/**
 * FlexBoxLinearGradient
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
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LINE\Clients\MessagingApi\Model;
use \LINE\Clients\MessagingApi\ObjectSerializer;

/**
 * FlexBoxLinearGradient Class Doc Comment
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlexBoxLinearGradient extends FlexBoxBackground
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlexBoxLinearGradient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'angle' => 'string',
        'startColor' => 'string',
        'endColor' => 'string',
        'centerColor' => 'string',
        'centerPosition' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'angle' => null,
        'startColor' => null,
        'endColor' => null,
        'centerColor' => null,
        'centerPosition' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'angle' => false,
		'startColor' => false,
		'endColor' => false,
		'centerColor' => false,
		'centerPosition' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'angle' => 'angle',
        'startColor' => 'startColor',
        'endColor' => 'endColor',
        'centerColor' => 'centerColor',
        'centerPosition' => 'centerPosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'angle' => 'setAngle',
        'startColor' => 'setStartColor',
        'endColor' => 'setEndColor',
        'centerColor' => 'setCenterColor',
        'centerPosition' => 'setCenterPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'angle' => 'getAngle',
        'startColor' => 'getStartColor',
        'endColor' => 'getEndColor',
        'centerColor' => 'getCenterColor',
        'centerPosition' => 'getCenterPosition'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('angle', $data ?? [], null);
        $this->setIfExists('startColor', $data ?? [], null);
        $this->setIfExists('endColor', $data ?? [], null);
        $this->setIfExists('centerColor', $data ?? [], null);
        $this->setIfExists('centerPosition', $data ?? [], null);
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
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets angle
     *
     * @return string|null
     */
    public function getAngle()
    {
        return $this->container['angle'];
    }

    /**
     * Sets angle
     *
     * @param string|null $angle angle
     *
     * @return self
     */
    public function setAngle($angle)
    {
        if (is_null($angle)) {
            throw new \InvalidArgumentException('non-nullable angle cannot be null');
        }
        $this->container['angle'] = $angle;

        return $this;
    }

    /**
     * Gets startColor
     *
     * @return string|null
     */
    public function getStartColor()
    {
        return $this->container['startColor'];
    }

    /**
     * Sets startColor
     *
     * @param string|null $startColor startColor
     *
     * @return self
     */
    public function setStartColor($startColor)
    {
        if (is_null($startColor)) {
            throw new \InvalidArgumentException('non-nullable startColor cannot be null');
        }
        $this->container['startColor'] = $startColor;

        return $this;
    }

    /**
     * Gets endColor
     *
     * @return string|null
     */
    public function getEndColor()
    {
        return $this->container['endColor'];
    }

    /**
     * Sets endColor
     *
     * @param string|null $endColor endColor
     *
     * @return self
     */
    public function setEndColor($endColor)
    {
        if (is_null($endColor)) {
            throw new \InvalidArgumentException('non-nullable endColor cannot be null');
        }
        $this->container['endColor'] = $endColor;

        return $this;
    }

    /**
     * Gets centerColor
     *
     * @return string|null
     */
    public function getCenterColor()
    {
        return $this->container['centerColor'];
    }

    /**
     * Sets centerColor
     *
     * @param string|null $centerColor centerColor
     *
     * @return self
     */
    public function setCenterColor($centerColor)
    {
        if (is_null($centerColor)) {
            throw new \InvalidArgumentException('non-nullable centerColor cannot be null');
        }
        $this->container['centerColor'] = $centerColor;

        return $this;
    }

    /**
     * Gets centerPosition
     *
     * @return string|null
     */
    public function getCenterPosition()
    {
        return $this->container['centerPosition'];
    }

    /**
     * Sets centerPosition
     *
     * @param string|null $centerPosition centerPosition
     *
     * @return self
     */
    public function setCenterPosition($centerPosition)
    {
        if (is_null($centerPosition)) {
            throw new \InvalidArgumentException('non-nullable centerPosition cannot be null');
        }
        $this->container['centerPosition'] = $centerPosition;

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


