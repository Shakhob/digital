<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dev_program}}`.
 */
class m231224_201322_create_dev_program_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dev_program}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255'),
            'file' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dev_program}}');
    }
}
