<?php

class m141208_143227_update_user_add_column extends CDbMigration
{
	public function up()
	{
        $this->addColumn('users', 'role', 'varchar(20) NOT NULL');
	}

	public function down()
	{
        $this->dropColumn('users', 'role');
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