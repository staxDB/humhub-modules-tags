<?php

use yii\db\Migration;

/**
 * Class m200416_214952_rename_tags_table
 */
class m200416_214952_rename_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('tag', 'custom_tag');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameTable('custom_tag', 'tag');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200416_214952_rename_tags_table cannot be reverted.\n";

        return false;
    }
    */
}
