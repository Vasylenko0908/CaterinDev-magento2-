<?php

/**
 * Olegnax
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Olegnax.com license that is
 * available through the world-wide-web at this URL:
 * https://www.olegnax.com/license
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Olegnax
 * @package     Olegnax_ProductSlider
 * @copyright   Copyright (c) 2019 Olegnax (http://www.olegnax.com/)
 * @license     https://www.olegnax.com/license
 */

namespace Olegnax\ProductSlider\Block;

use Magento\Sales\Model\ResourceModel\Report\Bestsellers\CollectionFactory;

class BestSellerProducts extends ProductsByIds
{

    public function getLoadedProductIds()
    {
        $productIds = [];
        $bestsellers_month = $this->_loadObject(CollectionFactory::class)->create()->setPeriod('month');

        foreach ($bestsellers_month as $_product) {
            $productIds[] = $_product->getProductId();
        }

        return $productIds;
    }

    public function getCacheKeyInfo($newval = [])
    {
        return parent::getCacheKeyInfo(['OLEGNAX_PRODUCTSLIDER_BESTSELLER_PRODUCTS_LIST_WIDGET']);
    }
}
