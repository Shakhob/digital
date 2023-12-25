<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%position}}`.
 */
class m231225_014936_create_position_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%position}}', [
            'id' => $this->primaryKey(),
            'year' => $this->integer(),
            'position' => $this->integer(),
            'sort' => $this->integer()->defaultValue(50),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%position}}');
    }
}
