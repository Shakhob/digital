<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%timeline}}`.
 */
class m231224_213723_create_timeline_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%timeline}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255')->notNull(),
            'date' => $this->string('255')->notNull(),
            'step' => $this->string('255'),
            'sort' => $this->integer()->defaultValue(50),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%timeline}}');
    }
}
