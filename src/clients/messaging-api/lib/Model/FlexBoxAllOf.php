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
 * FlexBoxAllOf
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

use \ArrayAccess;
use \LINE\Clients\MessagingApi\ObjectSerializer;

/**
 * FlexBoxAllOf Class Doc Comment
 *
 * @category Class
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlexBoxAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlexBox_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'layout' => 'string',
        'flex' => 'int',
        'contents' => '\LINE\Clients\MessagingApi\Model\FlexComponent[]',
        'spacing' => 'string',
        'margin' => 'string',
        'position' => 'string',
        'offsetTop' => 'string',
        'offsetBottom' => 'string',
        'offsetStart' => 'string',
        'offsetEnd' => 'string',
        'backgroundColor' => 'string',
        'borderColor' => 'string',
        'borderWidth' => 'string',
        'cornerRadius' => 'string',
        'width' => 'string',
        'maxWidth' => 'string',
        'height' => 'string',
        'maxHeight' => 'string',
        'paddingAll' => 'string',
        'paddingTop' => 'string',
        'paddingBottom' => 'string',
        'paddingStart' => 'string',
        'paddingEnd' => 'string',
        'action' => '\LINE\Clients\MessagingApi\Model\Action',
        'justifyContent' => 'string',
        'alignItems' => 'string',
        'background' => '\LINE\Clients\MessagingApi\Model\FlexBoxBackground'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'layout' => null,
        'flex' => 'int32',
        'contents' => null,
        'spacing' => null,
        'margin' => null,
        'position' => null,
        'offsetTop' => null,
        'offsetBottom' => null,
        'offsetStart' => null,
        'offsetEnd' => null,
        'backgroundColor' => null,
        'borderColor' => null,
        'borderWidth' => null,
        'cornerRadius' => null,
        'width' => null,
        'maxWidth' => null,
        'height' => null,
        'maxHeight' => null,
        'paddingAll' => null,
        'paddingTop' => null,
        'paddingBottom' => null,
        'paddingStart' => null,
        'paddingEnd' => null,
        'action' => null,
        'justifyContent' => null,
        'alignItems' => null,
        'background' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'layout' => false,
		'flex' => false,
		'contents' => false,
		'spacing' => false,
		'margin' => false,
		'position' => false,
		'offsetTop' => false,
		'offsetBottom' => false,
		'offsetStart' => false,
		'offsetEnd' => false,
		'backgroundColor' => false,
		'borderColor' => false,
		'borderWidth' => false,
		'cornerRadius' => false,
		'width' => false,
		'maxWidth' => false,
		'height' => false,
		'maxHeight' => false,
		'paddingAll' => false,
		'paddingTop' => false,
		'paddingBottom' => false,
		'paddingStart' => false,
		'paddingEnd' => false,
		'action' => false,
		'justifyContent' => false,
		'alignItems' => false,
		'background' => false
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
        'layout' => 'layout',
        'flex' => 'flex',
        'contents' => 'contents',
        'spacing' => 'spacing',
        'margin' => 'margin',
        'position' => 'position',
        'offsetTop' => 'offsetTop',
        'offsetBottom' => 'offsetBottom',
        'offsetStart' => 'offsetStart',
        'offsetEnd' => 'offsetEnd',
        'backgroundColor' => 'backgroundColor',
        'borderColor' => 'borderColor',
        'borderWidth' => 'borderWidth',
        'cornerRadius' => 'cornerRadius',
        'width' => 'width',
        'maxWidth' => 'maxWidth',
        'height' => 'height',
        'maxHeight' => 'maxHeight',
        'paddingAll' => 'paddingAll',
        'paddingTop' => 'paddingTop',
        'paddingBottom' => 'paddingBottom',
        'paddingStart' => 'paddingStart',
        'paddingEnd' => 'paddingEnd',
        'action' => 'action',
        'justifyContent' => 'justifyContent',
        'alignItems' => 'alignItems',
        'background' => 'background'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layout' => 'setLayout',
        'flex' => 'setFlex',
        'contents' => 'setContents',
        'spacing' => 'setSpacing',
        'margin' => 'setMargin',
        'position' => 'setPosition',
        'offsetTop' => 'setOffsetTop',
        'offsetBottom' => 'setOffsetBottom',
        'offsetStart' => 'setOffsetStart',
        'offsetEnd' => 'setOffsetEnd',
        'backgroundColor' => 'setBackgroundColor',
        'borderColor' => 'setBorderColor',
        'borderWidth' => 'setBorderWidth',
        'cornerRadius' => 'setCornerRadius',
        'width' => 'setWidth',
        'maxWidth' => 'setMaxWidth',
        'height' => 'setHeight',
        'maxHeight' => 'setMaxHeight',
        'paddingAll' => 'setPaddingAll',
        'paddingTop' => 'setPaddingTop',
        'paddingBottom' => 'setPaddingBottom',
        'paddingStart' => 'setPaddingStart',
        'paddingEnd' => 'setPaddingEnd',
        'action' => 'setAction',
        'justifyContent' => 'setJustifyContent',
        'alignItems' => 'setAlignItems',
        'background' => 'setBackground'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layout' => 'getLayout',
        'flex' => 'getFlex',
        'contents' => 'getContents',
        'spacing' => 'getSpacing',
        'margin' => 'getMargin',
        'position' => 'getPosition',
        'offsetTop' => 'getOffsetTop',
        'offsetBottom' => 'getOffsetBottom',
        'offsetStart' => 'getOffsetStart',
        'offsetEnd' => 'getOffsetEnd',
        'backgroundColor' => 'getBackgroundColor',
        'borderColor' => 'getBorderColor',
        'borderWidth' => 'getBorderWidth',
        'cornerRadius' => 'getCornerRadius',
        'width' => 'getWidth',
        'maxWidth' => 'getMaxWidth',
        'height' => 'getHeight',
        'maxHeight' => 'getMaxHeight',
        'paddingAll' => 'getPaddingAll',
        'paddingTop' => 'getPaddingTop',
        'paddingBottom' => 'getPaddingBottom',
        'paddingStart' => 'getPaddingStart',
        'paddingEnd' => 'getPaddingEnd',
        'action' => 'getAction',
        'justifyContent' => 'getJustifyContent',
        'alignItems' => 'getAlignItems',
        'background' => 'getBackground'
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

    public const LAYOUT_HORIZONTAL = 'horizontal';
    public const LAYOUT_VERTICAL = 'vertical';
    public const LAYOUT_BASELINE = 'baseline';
    public const POSITION_RELATIVE = 'relative';
    public const POSITION_ABSOLUTE = 'absolute';
    public const JUSTIFY_CONTENT_CENTER = 'center';
    public const JUSTIFY_CONTENT_FLEX_START = 'flex-start';
    public const JUSTIFY_CONTENT_FLEX_END = 'flex-end';
    public const JUSTIFY_CONTENT_SPACE_BETWEEN = 'space-between';
    public const JUSTIFY_CONTENT_SPACE_AROUND = 'space-around';
    public const JUSTIFY_CONTENT_SPACE_EVENLY = 'space-evenly';
    public const ALIGN_ITEMS_CENTER = 'center';
    public const ALIGN_ITEMS_FLEX_START = 'flex-start';
    public const ALIGN_ITEMS_FLEX_END = 'flex-end';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLayoutAllowableValues()
    {
        return [
            self::LAYOUT_HORIZONTAL,
            self::LAYOUT_VERTICAL,
            self::LAYOUT_BASELINE,
        ];
    }

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
    public function getJustifyContentAllowableValues()
    {
        return [
            self::JUSTIFY_CONTENT_CENTER,
            self::JUSTIFY_CONTENT_FLEX_START,
            self::JUSTIFY_CONTENT_FLEX_END,
            self::JUSTIFY_CONTENT_SPACE_BETWEEN,
            self::JUSTIFY_CONTENT_SPACE_AROUND,
            self::JUSTIFY_CONTENT_SPACE_EVENLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlignItemsAllowableValues()
    {
        return [
            self::ALIGN_ITEMS_CENTER,
            self::ALIGN_ITEMS_FLEX_START,
            self::ALIGN_ITEMS_FLEX_END,
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
        $this->setIfExists('layout', $data ?? [], null);
        $this->setIfExists('flex', $data ?? [], null);
        $this->setIfExists('contents', $data ?? [], null);
        $this->setIfExists('spacing', $data ?? [], null);
        $this->setIfExists('margin', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('offsetTop', $data ?? [], null);
        $this->setIfExists('offsetBottom', $data ?? [], null);
        $this->setIfExists('offsetStart', $data ?? [], null);
        $this->setIfExists('offsetEnd', $data ?? [], null);
        $this->setIfExists('backgroundColor', $data ?? [], null);
        $this->setIfExists('borderColor', $data ?? [], null);
        $this->setIfExists('borderWidth', $data ?? [], null);
        $this->setIfExists('cornerRadius', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('maxWidth', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('maxHeight', $data ?? [], null);
        $this->setIfExists('paddingAll', $data ?? [], null);
        $this->setIfExists('paddingTop', $data ?? [], null);
        $this->setIfExists('paddingBottom', $data ?? [], null);
        $this->setIfExists('paddingStart', $data ?? [], null);
        $this->setIfExists('paddingEnd', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('justifyContent', $data ?? [], null);
        $this->setIfExists('alignItems', $data ?? [], null);
        $this->setIfExists('background', $data ?? [], null);
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

        $allowedValues = $this->getLayoutAllowableValues();
        if (!is_null($this->container['layout']) && !in_array($this->container['layout'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'layout', must be one of '%s'",
                $this->container['layout'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPositionAllowableValues();
        if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'position', must be one of '%s'",
                $this->container['position'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJustifyContentAllowableValues();
        if (!is_null($this->container['justifyContent']) && !in_array($this->container['justifyContent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'justifyContent', must be one of '%s'",
                $this->container['justifyContent'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAlignItemsAllowableValues();
        if (!is_null($this->container['alignItems']) && !in_array($this->container['alignItems'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'alignItems', must be one of '%s'",
                $this->container['alignItems'],
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
     * Gets layout
     *
     * @return string|null
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param string|null $layout layout
     *
     * @return self
     */
    public function setLayout($layout)
    {
        if (is_null($layout)) {
            throw new \InvalidArgumentException('non-nullable layout cannot be null');
        }
        $allowedValues = $this->getLayoutAllowableValues();
        if (!in_array($layout, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'layout', must be one of '%s'",
                    $layout,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['layout'] = $layout;

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
     * @param int|null $flex flex
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
     * Gets contents
     *
     * @return \LINE\Clients\MessagingApi\Model\FlexComponent[]|null
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param \LINE\Clients\MessagingApi\Model\FlexComponent[]|null $contents contents
     *
     * @return self
     */
    public function setContents($contents)
    {
        if (is_null($contents)) {
            throw new \InvalidArgumentException('non-nullable contents cannot be null');
        }
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets spacing
     *
     * @return string|null
     */
    public function getSpacing()
    {
        return $this->container['spacing'];
    }

    /**
     * Sets spacing
     *
     * @param string|null $spacing spacing
     *
     * @return self
     */
    public function setSpacing($spacing)
    {
        if (is_null($spacing)) {
            throw new \InvalidArgumentException('non-nullable spacing cannot be null');
        }
        $this->container['spacing'] = $spacing;

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
     * @param string|null $margin margin
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
     * @param string|null $position position
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
     * @param string|null $offsetTop offsetTop
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
     * @param string|null $offsetBottom offsetBottom
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
     * @param string|null $offsetStart offsetStart
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
     * @param string|null $offsetEnd offsetEnd
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
     * @param string|null $backgroundColor backgroundColor
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
     * Gets borderColor
     *
     * @return string|null
     */
    public function getBorderColor()
    {
        return $this->container['borderColor'];
    }

    /**
     * Sets borderColor
     *
     * @param string|null $borderColor borderColor
     *
     * @return self
     */
    public function setBorderColor($borderColor)
    {
        if (is_null($borderColor)) {
            throw new \InvalidArgumentException('non-nullable borderColor cannot be null');
        }
        $this->container['borderColor'] = $borderColor;

        return $this;
    }

    /**
     * Gets borderWidth
     *
     * @return string|null
     */
    public function getBorderWidth()
    {
        return $this->container['borderWidth'];
    }

    /**
     * Sets borderWidth
     *
     * @param string|null $borderWidth borderWidth
     *
     * @return self
     */
    public function setBorderWidth($borderWidth)
    {
        if (is_null($borderWidth)) {
            throw new \InvalidArgumentException('non-nullable borderWidth cannot be null');
        }
        $this->container['borderWidth'] = $borderWidth;

        return $this;
    }

    /**
     * Gets cornerRadius
     *
     * @return string|null
     */
    public function getCornerRadius()
    {
        return $this->container['cornerRadius'];
    }

    /**
     * Sets cornerRadius
     *
     * @param string|null $cornerRadius cornerRadius
     *
     * @return self
     */
    public function setCornerRadius($cornerRadius)
    {
        if (is_null($cornerRadius)) {
            throw new \InvalidArgumentException('non-nullable cornerRadius cannot be null');
        }
        $this->container['cornerRadius'] = $cornerRadius;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string|null $width width
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets maxWidth
     *
     * @return string|null
     */
    public function getMaxWidth()
    {
        return $this->container['maxWidth'];
    }

    /**
     * Sets maxWidth
     *
     * @param string|null $maxWidth maxWidth
     *
     * @return self
     */
    public function setMaxWidth($maxWidth)
    {
        if (is_null($maxWidth)) {
            throw new \InvalidArgumentException('non-nullable maxWidth cannot be null');
        }
        $this->container['maxWidth'] = $maxWidth;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets maxHeight
     *
     * @return string|null
     */
    public function getMaxHeight()
    {
        return $this->container['maxHeight'];
    }

    /**
     * Sets maxHeight
     *
     * @param string|null $maxHeight maxHeight
     *
     * @return self
     */
    public function setMaxHeight($maxHeight)
    {
        if (is_null($maxHeight)) {
            throw new \InvalidArgumentException('non-nullable maxHeight cannot be null');
        }
        $this->container['maxHeight'] = $maxHeight;

        return $this;
    }

    /**
     * Gets paddingAll
     *
     * @return string|null
     */
    public function getPaddingAll()
    {
        return $this->container['paddingAll'];
    }

    /**
     * Sets paddingAll
     *
     * @param string|null $paddingAll paddingAll
     *
     * @return self
     */
    public function setPaddingAll($paddingAll)
    {
        if (is_null($paddingAll)) {
            throw new \InvalidArgumentException('non-nullable paddingAll cannot be null');
        }
        $this->container['paddingAll'] = $paddingAll;

        return $this;
    }

    /**
     * Gets paddingTop
     *
     * @return string|null
     */
    public function getPaddingTop()
    {
        return $this->container['paddingTop'];
    }

    /**
     * Sets paddingTop
     *
     * @param string|null $paddingTop paddingTop
     *
     * @return self
     */
    public function setPaddingTop($paddingTop)
    {
        if (is_null($paddingTop)) {
            throw new \InvalidArgumentException('non-nullable paddingTop cannot be null');
        }
        $this->container['paddingTop'] = $paddingTop;

        return $this;
    }

    /**
     * Gets paddingBottom
     *
     * @return string|null
     */
    public function getPaddingBottom()
    {
        return $this->container['paddingBottom'];
    }

    /**
     * Sets paddingBottom
     *
     * @param string|null $paddingBottom paddingBottom
     *
     * @return self
     */
    public function setPaddingBottom($paddingBottom)
    {
        if (is_null($paddingBottom)) {
            throw new \InvalidArgumentException('non-nullable paddingBottom cannot be null');
        }
        $this->container['paddingBottom'] = $paddingBottom;

        return $this;
    }

    /**
     * Gets paddingStart
     *
     * @return string|null
     */
    public function getPaddingStart()
    {
        return $this->container['paddingStart'];
    }

    /**
     * Sets paddingStart
     *
     * @param string|null $paddingStart paddingStart
     *
     * @return self
     */
    public function setPaddingStart($paddingStart)
    {
        if (is_null($paddingStart)) {
            throw new \InvalidArgumentException('non-nullable paddingStart cannot be null');
        }
        $this->container['paddingStart'] = $paddingStart;

        return $this;
    }

    /**
     * Gets paddingEnd
     *
     * @return string|null
     */
    public function getPaddingEnd()
    {
        return $this->container['paddingEnd'];
    }

    /**
     * Sets paddingEnd
     *
     * @param string|null $paddingEnd paddingEnd
     *
     * @return self
     */
    public function setPaddingEnd($paddingEnd)
    {
        if (is_null($paddingEnd)) {
            throw new \InvalidArgumentException('non-nullable paddingEnd cannot be null');
        }
        $this->container['paddingEnd'] = $paddingEnd;

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
     * Gets justifyContent
     *
     * @return string|null
     */
    public function getJustifyContent()
    {
        return $this->container['justifyContent'];
    }

    /**
     * Sets justifyContent
     *
     * @param string|null $justifyContent justifyContent
     *
     * @return self
     */
    public function setJustifyContent($justifyContent)
    {
        if (is_null($justifyContent)) {
            throw new \InvalidArgumentException('non-nullable justifyContent cannot be null');
        }
        $allowedValues = $this->getJustifyContentAllowableValues();
        if (!in_array($justifyContent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'justifyContent', must be one of '%s'",
                    $justifyContent,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['justifyContent'] = $justifyContent;

        return $this;
    }

    /**
     * Gets alignItems
     *
     * @return string|null
     */
    public function getAlignItems()
    {
        return $this->container['alignItems'];
    }

    /**
     * Sets alignItems
     *
     * @param string|null $alignItems alignItems
     *
     * @return self
     */
    public function setAlignItems($alignItems)
    {
        if (is_null($alignItems)) {
            throw new \InvalidArgumentException('non-nullable alignItems cannot be null');
        }
        $allowedValues = $this->getAlignItemsAllowableValues();
        if (!in_array($alignItems, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'alignItems', must be one of '%s'",
                    $alignItems,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alignItems'] = $alignItems;

        return $this;
    }

    /**
     * Gets background
     *
     * @return \LINE\Clients\MessagingApi\Model\FlexBoxBackground|null
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param \LINE\Clients\MessagingApi\Model\FlexBoxBackground|null $background background
     *
     * @return self
     */
    public function setBackground($background)
    {
        if (is_null($background)) {
            throw new \InvalidArgumentException('non-nullable background cannot be null');
        }
        $this->container['background'] = $background;

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


