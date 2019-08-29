<?php
namespace Visaya\BackendTest\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

       // $tableName = $installer->getTable('catalog_product_option');
        $tableName1 = $installer->getTable('catalog_product_option_type_value');
       /* $installer->getConnection()->addColumn(
            $tableName,
            'hide_option',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                'length' => 10,
                'nullable' => true,
                'after' => 'is_require',
                'default' => 0,
                'comment' => 'Hide Option',
            ]
        );*/ 
        $installer->getConnection()->addColumn(
            $tableName1,
            'hide_option',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                'length' => 10,
                'nullable' => true,
                'after' => 'sku',
                'default' => 0,
                'comment' => 'Hide Option',
            ]
        );
        $installer->endSetup();
    }
}