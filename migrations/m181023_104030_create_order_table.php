<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m181023_104030_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->dateTime(),
            'qty' => $this->integer(),
            'sum' => $this->float(),
            'status' => 'ENUM(`0`, `1`) NOT NULL DEFAULT `0`',
            'name' => $this->string(),
            'email' => $this->string(),
            'address' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }
}
