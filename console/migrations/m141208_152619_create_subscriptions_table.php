<?php

class m141208_152619_create_subscriptions_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('subscriptions', array(
			'id' => 'pk',
			'email' => 'VARCHAR(100) NOT NULL'
		));
		$this->createIndex('subsr_email', 'subscriptions', 'email');
	}

	public function down()
	{
		$this->dropTable('subscriptions');
	}

}