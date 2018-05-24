<?php

use yii\db\Migration;

/**
 * Handles the creation of table `color`.
 */
class m180523_055915_create_color_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('color', [
            'id' => $this->primaryKey(),
            'color' => $this->string(200)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('color');
    }
}
