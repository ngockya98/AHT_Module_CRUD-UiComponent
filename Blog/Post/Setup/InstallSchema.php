<?php
namespace Blog\Post\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
	public function install(
		\Magento\Framework\Setup\SchemaSetupInterface $setup,
		\Magento\Framework\Setup\ModuleContextInterface $context
	)
	{
		$install = $setup;
		$installer = $install->startSetup();

		//Start setup table
		$table = $installer->getConnection()->newTable(
			$installer->getTable('aht_blog_contact')
		)->addColumn(
			'contact_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			null,
			[
				'identity' => true,
				'nullable' => false,
				'primary' => true,
				'unsigned' => true
			],
			'Entiry ID'
		)->addColumn(
			'name',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			[
				'nullable' => false
			],
			'Demo name'
		)->addColumn(
			'comment',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			[
				'nullable' => false,
				'default' => '0'
			],
			'Demo Comment'
		)->addColumn(
			'creation_time',
			\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
			null,
			[
				'nullable' => false,
				'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT
			],
			'Creation Time'
		)->addColumn(
			'update_time',
			\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
			null,
			[
				'nullable' => false,
				'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE
			],
			'Modification Time'
		)->addColumn(
			'is_active',
			\Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
			null,
			[
				'nullable' => false,
				'default' => 1
			],
			'Is Active'
		);
		$installer->getConnection()->createTable($table);
		//END Setup
		$installer->endSetup();
	}
}
