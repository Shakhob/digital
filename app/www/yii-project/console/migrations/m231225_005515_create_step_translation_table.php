<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%step_translation}}`.
 */
class m231225_005515_create_step_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%step_translation}}', [
            'id' => $this->primaryKey(),
            'timeline_id' => $this->integer(),
            'language' => $this->string('16'),
            'name' => $this->string('255'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%step_translation}}');
    }
}
