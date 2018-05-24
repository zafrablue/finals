<?php

use yii\db\Migration;

/**
 * Handles the creation of table `size`.
 */
class m180523_055602_create_size_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('size', [
            'id' => $this->primaryKey(),
            'size' => $this->string(200)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('size');
    }
}
