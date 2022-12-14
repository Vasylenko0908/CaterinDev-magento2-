<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_SocialShare
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\SocialShare\Model\System\Config\Source;

/**
 * Class InlineApplyFor
 * @package Mageplaza\SocialShare\Model\System\Config\Source
 */
class InlineApplyFor extends OptionArray
{
    const HOME_PAGE     = "home_page";
    const CATEGORY_PAGE = "category_page";
    const PRODUCT_PAGE  = "product_page";

    /**
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::HOME_PAGE     => __('Home Page'),
            self::CATEGORY_PAGE => __('Categories Page'),
            self::PRODUCT_PAGE  => __('Products Page'),
        ];
    }
}
