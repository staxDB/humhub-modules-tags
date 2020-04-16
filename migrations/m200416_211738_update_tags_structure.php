<?php

use yii\db\Migration;

/**
 * Class m200416_211738_update_tags_structure
 */
class m200416_211738_update_tags_structure extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tag', 'keyword', $this->string(50));
        $this->dropColumn('tag', 'description');
        $this->dropColumn('tag', 'url');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tag', 'keyword');
        $this->addColumn('tag', 'description', 'TEXT NULL');
        $this->addColumn('tag', 'url', 'varchar(255) NOT NULL');
    }
}
