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
 * FlexIconSize
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
use \LINE\Clients\MessagingApi\ObjectSerializer;

/**
 * FlexIconSize Class Doc Comment
 *
 * @category Class
 * @description You can set the width of an Flex icon component with the &#x60;size&#x60; property, in pixels, as a percentage, or with a keyword. FlexIconSize just provides only keywords.
 * @package  LINE\Clients\MessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FlexIconSize
{
    /**
     * Possible values of this enum
     */
    public const XXS = 'xxs';

    public const XS = 'xs';

    public const SM = 'sm';

    public const MD = 'md';

    public const LG = 'lg';

    public const XL = 'xl';

    public const XXL = 'xxl';

    public const _3XL = '3xl';

    public const _4XL = '4xl';

    public const _5XL = '5xl';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::XXS,
            self::XS,
            self::SM,
            self::MD,
            self::LG,
            self::XL,
            self::XXL,
            self::_3XL,
            self::_4XL,
            self::_5XL
        ];
    }
}


