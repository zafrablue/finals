<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tshirt`.
 */
class m180523_060139_create_tshirt_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tshirt', [
            'id' => $this->primaryKey(),
            'size_id' => $this->integer()->notNull(),
            'color_id' => $this->integer()->notNull(),
            'description' => $this->string(200)->notNull(),
            'price' => $this->money()->notNull(),
            'quantity' => $this->integer()->notNull()
        ]);
         $this->addForeignKey(
            'fk-tshirt-size',
            'tshirt', 'size_id',
            'size','id'
        );

        $this->createIndex(
            'idx-tshirt-size_id',
            'tshirt', 'size_id'
        );
        $this->addForeignKey(
            'fk-tshirt-color',
            'tshirt', 'color_id',
            'color', 'id'
        );
        $this->createIndex(
            'idx-tshirt-color_id',
            'tshirt', 'color_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-tshirt-size', 'tshirt');
        $this->dropForeignKey('fk-tshirt-color', 'tshirt');
        $this->dropIndex('idx-tshirt-size_id', 'tshirt');
        $this->dropIndex('idx-tshirt-color_id', 'tshirt');
        $this->dropTable('tshirt');
    }
}