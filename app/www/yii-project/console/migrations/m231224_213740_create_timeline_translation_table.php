<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%timeline_translation}}`.
 */
class m231224_213740_create_timeline_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%timeline_translation}}', [
            'id' => $this->primaryKey(),
            'timeline_id' => $this->integer(),
            'language' => $this->string('16'),
            'name' => $this->string('255'),
            'step' => $this->string('255'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%timeline_translation}}');
    }
}
