<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Tshirt`.
 */
class m180523_034544_create_Tshirt_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Tshirt', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Tshirt');
    }
}
