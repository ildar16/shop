<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m181023_103534_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'patent_id' => $this->integer(),
            'title' => $this->string(),
            'keywords' => $this->string(),
            'description' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
