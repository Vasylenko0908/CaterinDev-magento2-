<?php
 /**
  * @category Mageants Product360Image
  * @package Mageants_Product360Image
  * @copyright Copyright (c) 2017 Mageants
  * @author Mageants Team <support@Mageants.com>
  */

namespace Mageants\Product360Image\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()
            ->addColumn(
                $setup->getTable("mageants_product360image"),
                'sku',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 255,
                    'default' => null,
                    'nullable' => false,
                    'comment' =>'Product Sku'
                ]
            );

        $setup->endSetup();
    }
}
