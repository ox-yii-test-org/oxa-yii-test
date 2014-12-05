<?php

class m141007_065715_create_male_test_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('male', array(
                'id' => 'pk',
                'name' => 'varchar(40) NOT NULL',
                'desc' => 'text NOT NULL',
                'status' => 'int(11) NOT NULL',
                'hash' => 'varchar(32) NOT NULL',
                'image' => 'mediumblob NOT NULL',
                'count' => 'int(15)',
                'count_winner' => 'int(15)',
        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
	}

	public function down()
	{
        $this->dropTable('male');
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