<?php

class m141008_113000_create_female_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('female', array(
                'id' => 'pk',
                'name' => 'varchar(255) NOT NULL',
                'desc' => 'text NOT NULL',
                'status' => 'tinyint(1) NOT NULL',
                'hash' => 'varchar(32) NOT NULL',
                'image' => 'mediumblob NOT NULL',
                'count' => 'int(15)',
                'count_winner' => 'int(15)',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
	}

	public function down()
	{
        $this->dropTable('female');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}