<?php

class m141204_074430_create_compare_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('compare', array(
            'id' => 'pk',
            'type' => 'varchar(20) NOT NULL',
            'time' => 'datetime NOT NULL',
            'id_vouter' => 'int(11) NOT NULL',
            'id_winner' => 'int(11) NOT NULL',
            'id_looser' => 'int(11) NOT NULL',

        ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
	}

	public function down()
	{
        $this->dropTable('compare');
//		echo "m141204_074430_create_compare_table does not support migration down.\n";
//		return false;
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