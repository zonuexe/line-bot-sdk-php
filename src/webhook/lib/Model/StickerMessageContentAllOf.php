<?php
/**
 * StickerMessageContentAllOf
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\Webhook
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Webhook Type Definition
 *
 * Webhook event definition of the LINE Messaging API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LINE\Webhook\Model;

use \ArrayAccess;
use \LINE\Webhook\ObjectSerializer;

/**
 * StickerMessageContentAllOf Class Doc Comment
 *
 * @category Class
 * @description Message object which contains the sticker data sent from the source.
 * @package  LINE\Webhook
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StickerMessageContentAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StickerMessageContent_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'packageId' => 'string',
        'stickerId' => 'string',
        'stickerResourceType' => 'string',
        'keywords' => 'string[]',
        'text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'packageId' => null,
        'stickerId' => null,
        'stickerResourceType' => null,
        'keywords' => null,
        'text' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'packageId' => false,
		'stickerId' => false,
		'stickerResourceType' => false,
		'keywords' => false,
		'text' => false
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
        'id' => 'id',
        'packageId' => 'packageId',
        'stickerId' => 'stickerId',
        'stickerResourceType' => 'stickerResourceType',
        'keywords' => 'keywords',
        'text' => 'text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'packageId' => 'setPackageId',
        'stickerId' => 'setStickerId',
        'stickerResourceType' => 'setStickerResourceType',
        'keywords' => 'setKeywords',
        'text' => 'setText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'packageId' => 'getPackageId',
        'stickerId' => 'getStickerId',
        'stickerResourceType' => 'getStickerResourceType',
        'keywords' => 'getKeywords',
        'text' => 'getText'
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

    public const STICKER_RESOURCE_TYPE__STATIC = 'STATIC';
    public const STICKER_RESOURCE_TYPE_ANIMATION = 'ANIMATION';
    public const STICKER_RESOURCE_TYPE_SOUND = 'SOUND';
    public const STICKER_RESOURCE_TYPE_ANIMATION_SOUND = 'ANIMATION_SOUND';
    public const STICKER_RESOURCE_TYPE_POPUP = 'POPUP';
    public const STICKER_RESOURCE_TYPE_POPUP_SOUND = 'POPUP_SOUND';
    public const STICKER_RESOURCE_TYPE_CUSTOM = 'CUSTOM';
    public const STICKER_RESOURCE_TYPE_MESSAGE = 'MESSAGE';
    public const STICKER_RESOURCE_TYPE_NAME_TEXT = 'NAME_TEXT';
    public const STICKER_RESOURCE_TYPE_PER_STICKER_TEXT = 'PER_STICKER_TEXT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStickerResourceTypeAllowableValues()
    {
        return [
            self::STICKER_RESOURCE_TYPE__STATIC,
            self::STICKER_RESOURCE_TYPE_ANIMATION,
            self::STICKER_RESOURCE_TYPE_SOUND,
            self::STICKER_RESOURCE_TYPE_ANIMATION_SOUND,
            self::STICKER_RESOURCE_TYPE_POPUP,
            self::STICKER_RESOURCE_TYPE_POPUP_SOUND,
            self::STICKER_RESOURCE_TYPE_CUSTOM,
            self::STICKER_RESOURCE_TYPE_MESSAGE,
            self::STICKER_RESOURCE_TYPE_NAME_TEXT,
            self::STICKER_RESOURCE_TYPE_PER_STICKER_TEXT,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('packageId', $data ?? [], null);
        $this->setIfExists('stickerId', $data ?? [], null);
        $this->setIfExists('stickerResourceType', $data ?? [], null);
        $this->setIfExists('keywords', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['packageId'] === null) {
            $invalidProperties[] = "'packageId' can't be null";
        }
        if ($this->container['stickerId'] === null) {
            $invalidProperties[] = "'stickerId' can't be null";
        }
        if ($this->container['stickerResourceType'] === null) {
            $invalidProperties[] = "'stickerResourceType' can't be null";
        }
        $allowedValues = $this->getStickerResourceTypeAllowableValues();
        if (!is_null($this->container['stickerResourceType']) && !in_array($this->container['stickerResourceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'stickerResourceType', must be one of '%s'",
                $this->container['stickerResourceType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['keywords']) && (count($this->container['keywords']) > 15)) {
            $invalidProperties[] = "invalid value for 'keywords', number of items must be less than or equal to 15.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 100)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 100.";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Message ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets packageId
     *
     * @return string
     */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
     * Sets packageId
     *
     * @param string $packageId Package ID
     *
     * @return self
     */
    public function setPackageId($packageId)
    {
        if (is_null($packageId)) {
            throw new \InvalidArgumentException('non-nullable packageId cannot be null');
        }
        $this->container['packageId'] = $packageId;

        return $this;
    }

    /**
     * Gets stickerId
     *
     * @return string
     */
    public function getStickerId()
    {
        return $this->container['stickerId'];
    }

    /**
     * Sets stickerId
     *
     * @param string $stickerId Sticker ID
     *
     * @return self
     */
    public function setStickerId($stickerId)
    {
        if (is_null($stickerId)) {
            throw new \InvalidArgumentException('non-nullable stickerId cannot be null');
        }
        $this->container['stickerId'] = $stickerId;

        return $this;
    }

    /**
     * Gets stickerResourceType
     *
     * @return string
     */
    public function getStickerResourceType()
    {
        return $this->container['stickerResourceType'];
    }

    /**
     * Sets stickerResourceType
     *
     * @param string $stickerResourceType stickerResourceType
     *
     * @return self
     */
    public function setStickerResourceType($stickerResourceType)
    {
        if (is_null($stickerResourceType)) {
            throw new \InvalidArgumentException('non-nullable stickerResourceType cannot be null');
        }
        $allowedValues = $this->getStickerResourceTypeAllowableValues();
        if (!in_array($stickerResourceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'stickerResourceType', must be one of '%s'",
                    $stickerResourceType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stickerResourceType'] = $stickerResourceType;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[]|null $keywords Array of up to 15 keywords describing the sticker. If a sticker has 16 or more keywords, a random selection of 15 keywords will be returned. The keyword selection is random for each event, so different keywords may be returned for the same sticker.
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        if (is_null($keywords)) {
            throw new \InvalidArgumentException('non-nullable keywords cannot be null');
        }

        if ((count($keywords) > 15)) {
            throw new \InvalidArgumentException('invalid value for $keywords when calling StickerMessageContentAllOf., number of items must be less than or equal to 15.');
        }
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Any text entered by the user. This property is only included for message stickers. Max character limit: 100
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        if ((mb_strlen($text) > 100)) {
            throw new \InvalidArgumentException('invalid length for $text when calling StickerMessageContentAllOf., must be smaller than or equal to 100.');
        }

        $this->container['text'] = $text;

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


