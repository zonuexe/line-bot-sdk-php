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
 * FlexImage
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
 * FlexImage Class Doc Comment
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlexImage extends FlexComponent
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlexImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'flex' => 'int',
        'margin' => 'string',
        'position' => 'string',
        'offsetTop' => 'string',
        'offsetBottom' => 'string',
        'offsetStart' => 'string',
        'offsetEnd' => 'string',
        'align' => 'string',
        'gravity' => 'string',
        'size' => 'string',
        'aspectRatio' => 'string',
        'aspectMode' => 'string',
        'backgroundColor' => 'string',
        'action' => '\LINE\Clients\MessagingApi\Model\Action',
        'animated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => 'uri',
        'flex' => 'int32',
        'margin' => null,
        'position' => null,
        'offsetTop' => null,
        'offsetBottom' => null,
        'offsetStart' => null,
        'offsetEnd' => null,
        'align' => null,
        'gravity' => null,
        'size' => null,
        'aspectRatio' => null,
        'aspectMode' => null,
        'backgroundColor' => null,
        'action' => null,
        'animated' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => false,
		'flex' => false,
		'margin' => false,
		'position' => false,
		'offsetTop' => false,
		'offsetBottom' => false,
		'offsetStart' => false,
		'offsetEnd' => false,
		'align' => false,
		'gravity' => false,
		'size' => false,
		'aspectRatio' => false,
		'aspectMode' => false,
		'backgroundColor' => false,
		'action' => false,
		'animated' => false
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
        'url' => 'url',
        'flex' => 'flex',
        'margin' => 'margin',
        'position' => 'position',
        'offsetTop' => 'offsetTop',
        'offsetBottom' => 'offsetBottom',
        'offsetStart' => 'offsetStart',
        'offsetEnd' => 'offsetEnd',
        'align' => 'align',
        'gravity' => 'gravity',
        'size' => 'size',
        'aspectRatio' => 'aspectRatio',
        'aspectMode' => 'aspectMode',
        'backgroundColor' => 'backgroundColor',
        'action' => 'action',
        'animated' => 'animated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'flex' => 'setFlex',
        'margin' => 'setMargin',
        'position' => 'setPosition',
        'offsetTop' => 'setOffsetTop',
        'offsetBottom' => 'setOffsetBottom',
        'offsetStart' => 'setOffsetStart',
        'offsetEnd' => 'setOffsetEnd',
        'align' => 'setAlign',
        'gravity' => 'setGravity',
        'size' => 'setSize',
        'aspectRatio' => 'setAspectRatio',
        'aspectMode' => 'setAspectMode',
        'backgroundColor' => 'setBackgroundColor',
        'action' => 'setAction',
        'animated' => 'setAnimated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'flex' => 'getFlex',
        'margin' => 'getMargin',
        'position' => 'getPosition',
        'offsetTop' => 'getOffsetTop',
        'offsetBottom' => 'getOffsetBottom',
        'offsetStart' => 'getOffsetStart',
        'offsetEnd' => 'getOffsetEnd',
        'align' => 'getAlign',
        'gravity' => 'getGravity',
        'size' => 'getSize',
        'aspectRatio' => 'getAspectRatio',
        'aspectMode' => 'getAspectMode',
        'backgroundColor' => 'getBackgroundColor',
        'action' => 'getAction',
        'animated' => 'getAnimated'
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

    public const POSITION_RELATIVE = 'relative';
    public const POSITION_ABSOLUTE = 'absolute';
    public const ALIGN_START = 'start';
    public const ALIGN_END = 'end';
    public const ALIGN_CENTER = 'center';
    public const GRAVITY_TOP = 'top';
    public const GRAVITY_BOTTOM = 'bottom';
    public const GRAVITY_CENTER = 'center';
    public const ASPECT_MODE_FIT = 'fit';
    public const ASPECT_MODE_COVER = 'cover';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_RELATIVE,
            self::POSITION_ABSOLUTE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlignAllowableValues()
    {
        return [
            self::ALIGN_START,
            self::ALIGN_END,
            self::ALIGN_CENTER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGravityAllowableValues()
    {
        return [
            self::GRAVITY_TOP,
            self::GRAVITY_BOTTOM,
            self::GRAVITY_CENTER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAspectModeAllowableValues()
    {
        return [
            self::ASPECT_MODE_FIT,
            self::ASPECT_MODE_COVER,
        ];
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

        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('flex', $data ?? [], null);
        $this->setIfExists('margin', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('offsetTop', $data ?? [], null);
        $this->setIfExists('offsetBottom', $data ?? [], null);
        $this->setIfExists('offsetStart', $data ?? [], null);
        $this->setIfExists('offsetEnd', $data ?? [], null);
        $this->setIfExists('align', $data ?? [], null);
        $this->setIfExists('gravity', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], 'md');
        $this->setIfExists('aspectRatio', $data ?? [], null);
        $this->setIfExists('aspectMode', $data ?? [], null);
        $this->setIfExists('backgroundColor', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('animated', $data ?? [], false);
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

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        $allowedValues = $this->getPositionAllowableValues();
        if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'position', must be one of '%s'",
                $this->container['position'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAlignAllowableValues();
        if (!is_null($this->container['align']) && !in_array($this->container['align'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'align', must be one of '%s'",
                $this->container['align'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGravityAllowableValues();
        if (!is_null($this->container['gravity']) && !in_array($this->container['gravity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gravity', must be one of '%s'",
                $this->container['gravity'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAspectModeAllowableValues();
        if (!is_null($this->container['aspectMode']) && !in_array($this->container['aspectMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'aspectMode', must be one of '%s'",
                $this->container['aspectMode'],
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Image URL (Max character limit: 2000) Protocol: HTTPS (TLS 1.2 or later) Image format: JPEG or PNG Maximum image size: 1024×1024 pixels Maximum file size: 10 MB (300 KB when the animated property is true)
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets flex
     *
     * @return int|null
     */
    public function getFlex()
    {
        return $this->container['flex'];
    }

    /**
     * Sets flex
     *
     * @param int|null $flex The ratio of the width or height of this component within the parent box.
     *
     * @return self
     */
    public function setFlex($flex)
    {
        if (is_null($flex)) {
            throw new \InvalidArgumentException('non-nullable flex cannot be null');
        }
        $this->container['flex'] = $flex;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return string|null
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param string|null $margin The minimum amount of space to include before this component in its parent container.
     *
     * @return self
     */
    public function setMargin($margin)
    {
        if (is_null($margin)) {
            throw new \InvalidArgumentException('non-nullable margin cannot be null');
        }
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position Reference for offsetTop, offsetBottom, offsetStart, and offsetEnd. Specify one of the following values:  `relative`: Use the previous box as reference. `absolute`: Use the top left of parent element as reference. The default value is relative.
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $allowedValues = $this->getPositionAllowableValues();
        if (!in_array($position, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'position', must be one of '%s'",
                    $position,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets offsetTop
     *
     * @return string|null
     */
    public function getOffsetTop()
    {
        return $this->container['offsetTop'];
    }

    /**
     * Sets offsetTop
     *
     * @param string|null $offsetTop Offset.
     *
     * @return self
     */
    public function setOffsetTop($offsetTop)
    {
        if (is_null($offsetTop)) {
            throw new \InvalidArgumentException('non-nullable offsetTop cannot be null');
        }
        $this->container['offsetTop'] = $offsetTop;

        return $this;
    }

    /**
     * Gets offsetBottom
     *
     * @return string|null
     */
    public function getOffsetBottom()
    {
        return $this->container['offsetBottom'];
    }

    /**
     * Sets offsetBottom
     *
     * @param string|null $offsetBottom Offset.
     *
     * @return self
     */
    public function setOffsetBottom($offsetBottom)
    {
        if (is_null($offsetBottom)) {
            throw new \InvalidArgumentException('non-nullable offsetBottom cannot be null');
        }
        $this->container['offsetBottom'] = $offsetBottom;

        return $this;
    }

    /**
     * Gets offsetStart
     *
     * @return string|null
     */
    public function getOffsetStart()
    {
        return $this->container['offsetStart'];
    }

    /**
     * Sets offsetStart
     *
     * @param string|null $offsetStart Offset.
     *
     * @return self
     */
    public function setOffsetStart($offsetStart)
    {
        if (is_null($offsetStart)) {
            throw new \InvalidArgumentException('non-nullable offsetStart cannot be null');
        }
        $this->container['offsetStart'] = $offsetStart;

        return $this;
    }

    /**
     * Gets offsetEnd
     *
     * @return string|null
     */
    public function getOffsetEnd()
    {
        return $this->container['offsetEnd'];
    }

    /**
     * Sets offsetEnd
     *
     * @param string|null $offsetEnd Offset.
     *
     * @return self
     */
    public function setOffsetEnd($offsetEnd)
    {
        if (is_null($offsetEnd)) {
            throw new \InvalidArgumentException('non-nullable offsetEnd cannot be null');
        }
        $this->container['offsetEnd'] = $offsetEnd;

        return $this;
    }

    /**
     * Gets align
     *
     * @return string|null
     */
    public function getAlign()
    {
        return $this->container['align'];
    }

    /**
     * Sets align
     *
     * @param string|null $align Alignment style in horizontal direction.
     *
     * @return self
     */
    public function setAlign($align)
    {
        if (is_null($align)) {
            throw new \InvalidArgumentException('non-nullable align cannot be null');
        }
        $allowedValues = $this->getAlignAllowableValues();
        if (!in_array($align, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'align', must be one of '%s'",
                    $align,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['align'] = $align;

        return $this;
    }

    /**
     * Gets gravity
     *
     * @return string|null
     */
    public function getGravity()
    {
        return $this->container['gravity'];
    }

    /**
     * Sets gravity
     *
     * @param string|null $gravity Alignment style in vertical direction.
     *
     * @return self
     */
    public function setGravity($gravity)
    {
        if (is_null($gravity)) {
            throw new \InvalidArgumentException('non-nullable gravity cannot be null');
        }
        $allowedValues = $this->getGravityAllowableValues();
        if (!in_array($gravity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gravity', must be one of '%s'",
                    $gravity,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gravity'] = $gravity;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size The maximum image width. This is md by default.
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
     * Gets aspectRatio
     *
     * @return string|null
     */
    public function getAspectRatio()
    {
        return $this->container['aspectRatio'];
    }

    /**
     * Sets aspectRatio
     *
     * @param string|null $aspectRatio Aspect ratio of the image. `{width}:{height}` format. Specify the value of `{width}` and `{height}` in the range from `1` to `100000`. However, you cannot set `{height}` to a value that is more than three times the value of `{width}`. The default value is `1:1`.
     *
     * @return self
     */
    public function setAspectRatio($aspectRatio)
    {
        if (is_null($aspectRatio)) {
            throw new \InvalidArgumentException('non-nullable aspectRatio cannot be null');
        }
        $this->container['aspectRatio'] = $aspectRatio;

        return $this;
    }

    /**
     * Gets aspectMode
     *
     * @return string|null
     */
    public function getAspectMode()
    {
        return $this->container['aspectMode'];
    }

    /**
     * Sets aspectMode
     *
     * @param string|null $aspectMode The display style of the image if the aspect ratio of the image and that specified by the aspectRatio property do not match.
     *
     * @return self
     */
    public function setAspectMode($aspectMode)
    {
        if (is_null($aspectMode)) {
            throw new \InvalidArgumentException('non-nullable aspectMode cannot be null');
        }
        $allowedValues = $this->getAspectModeAllowableValues();
        if (!in_array($aspectMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'aspectMode', must be one of '%s'",
                    $aspectMode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['aspectMode'] = $aspectMode;

        return $this;
    }

    /**
     * Gets backgroundColor
     *
     * @return string|null
     */
    public function getBackgroundColor()
    {
        return $this->container['backgroundColor'];
    }

    /**
     * Sets backgroundColor
     *
     * @param string|null $backgroundColor Background color of the image. Use a hexadecimal color code.
     *
     * @return self
     */
    public function setBackgroundColor($backgroundColor)
    {
        if (is_null($backgroundColor)) {
            throw new \InvalidArgumentException('non-nullable backgroundColor cannot be null');
        }
        $this->container['backgroundColor'] = $backgroundColor;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \LINE\Clients\MessagingApi\Model\Action|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \LINE\Clients\MessagingApi\Model\Action|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets animated
     *
     * @return bool|null
     */
    public function getAnimated()
    {
        return $this->container['animated'];
    }

    /**
     * Sets animated
     *
     * @param bool|null $animated When this is `true`, an animated image (APNG) plays. You can specify a value of true up to 10 images in a single message. You can't send messages that exceed this limit.  This is `false` by default. Animated images larger than 300 KB aren't played back.
     *
     * @return self
     */
    public function setAnimated($animated)
    {
        if (is_null($animated)) {
            throw new \InvalidArgumentException('non-nullable animated cannot be null');
        }
        $this->container['animated'] = $animated;

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


