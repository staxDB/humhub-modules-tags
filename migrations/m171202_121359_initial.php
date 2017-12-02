<?php

use humhub\components\Migration;

class m171202_121359_initial extends Migration
{
    public function up()
    {
        $this->createTable('tag', array(
            'id' => 'pk',
            'title' => 'varchar(255) NOT NULL',
            'description' => 'TEXT NULL',
            'url' => 'varchar(255) NOT NULL',
        ), '');
    }

    public function down()
    {
        echo "m171202_121359_initial cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171202_121359_initial cannot be reverted.\n";

        return false;
    }
    */
}
