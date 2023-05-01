<?php
/**
 * UpdateLiffAppRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LINE\Clients\Liff
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LIFF server API
 *
 * LIFF Server API.
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LINE\Clients\Liff\Model;

use \ArrayAccess;
use \LINE\Clients\Liff\ObjectSerializer;

/**
 * UpdateLiffAppRequest Class Doc Comment
 *
 * @category Class
 * @package  LINE\Clients\Liff
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateLiffAppRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateLiffAppRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'view' => '\LINE\Clients\Liff\Model\LiffView',
        'description' => 'string',
        'features' => '\LINE\Clients\Liff\Model\LiffFeatures',
        'permanentLinkPattern' => 'string',
        'scope' => '\LINE\Clients\Liff\Model\LiffScope[]',
        'botPrompt' => '\LINE\Clients\Liff\Model\LiffBotPrompt'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'view' => null,
        'description' => null,
        'features' => null,
        'permanentLinkPattern' => null,
        'scope' => null,
        'botPrompt' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'view' => false,
		'description' => false,
		'features' => false,
		'permanentLinkPattern' => false,
		'scope' => false,
		'botPrompt' => false
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
        'view' => 'view',
        'description' => 'description',
        'features' => 'features',
        'permanentLinkPattern' => 'permanentLinkPattern',
        'scope' => 'scope',
        'botPrompt' => 'botPrompt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'view' => 'setView',
        'description' => 'setDescription',
        'features' => 'setFeatures',
        'permanentLinkPattern' => 'setPermanentLinkPattern',
        'scope' => 'setScope',
        'botPrompt' => 'setBotPrompt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'view' => 'getView',
        'description' => 'getDescription',
        'features' => 'getFeatures',
        'permanentLinkPattern' => 'getPermanentLinkPattern',
        'scope' => 'getScope',
        'botPrompt' => 'getBotPrompt'
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
        $this->setIfExists('view', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('features', $data ?? [], null);
        $this->setIfExists('permanentLinkPattern', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('botPrompt', $data ?? [], null);
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
     * Gets view
     *
     * @return \LINE\Clients\Liff\Model\LiffView|null
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     *
     * @param \LINE\Clients\Liff\Model\LiffView|null $view view
     *
     * @return self
     */
    public function setView($view)
    {
        if (is_null($view)) {
            throw new \InvalidArgumentException('non-nullable view cannot be null');
        }
        $this->container['view'] = $view;

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
     * @param string|null $description Name of the LIFF app.  The LIFF app name can't include \"LINE\" or similar strings, or inappropriate strings.
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
     * Gets features
     *
     * @return \LINE\Clients\Liff\Model\LiffFeatures|null
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \LINE\Clients\Liff\Model\LiffFeatures|null $features features
     *
     * @return self
     */
    public function setFeatures($features)
    {
        if (is_null($features)) {
            throw new \InvalidArgumentException('non-nullable features cannot be null');
        }
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets permanentLinkPattern
     *
     * @return string|null
     */
    public function getPermanentLinkPattern()
    {
        return $this->container['permanentLinkPattern'];
    }

    /**
     * Sets permanentLinkPattern
     *
     * @param string|null $permanentLinkPattern How additional information in LIFF URLs is handled. Specify `concat`.
     *
     * @return self
     */
    public function setPermanentLinkPattern($permanentLinkPattern)
    {
        if (is_null($permanentLinkPattern)) {
            throw new \InvalidArgumentException('non-nullable permanentLinkPattern cannot be null');
        }
        $this->container['permanentLinkPattern'] = $permanentLinkPattern;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return \LINE\Clients\Liff\Model\LiffScope[]|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \LINE\Clients\Liff\Model\LiffScope[]|null $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets botPrompt
     *
     * @return \LINE\Clients\Liff\Model\LiffBotPrompt|null
     */
    public function getBotPrompt()
    {
        return $this->container['botPrompt'];
    }

    /**
     * Sets botPrompt
     *
     * @param \LINE\Clients\Liff\Model\LiffBotPrompt|null $botPrompt botPrompt
     *
     * @return self
     */
    public function setBotPrompt($botPrompt)
    {
        if (is_null($botPrompt)) {
            throw new \InvalidArgumentException('non-nullable botPrompt cannot be null');
        }
        $this->container['botPrompt'] = $botPrompt;

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


