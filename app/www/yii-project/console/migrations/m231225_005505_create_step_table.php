<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%step}}`.
 */
class m231225_005505_create_step_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%step}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255')->notNull(),
            'link' => $this->string('255'),
            'sort' => $this->integer()->defaultValue(50),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%step}}');
    }
}
