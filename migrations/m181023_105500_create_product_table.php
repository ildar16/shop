<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m181023_105500_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string(),
            'content' => $this->text(),
            'price' => $this->float(),
            'keywords' => $this->string(),
            'description' => $this->string(),
            'img' => $this->string(),
            'hit' => 'ENUM(`0`, `1`) NOT NULL DEFAULT `0`',
            'new' => 'ENUM(`0`, `1`) NOT NULL DEFAULT `0`',
            'sale' => 'ENUM(`0`, `1`) NOT NULL DEFAULT `0`',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
