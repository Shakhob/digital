<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dev_program_translation}}`.
 */
class m231224_201504_create_dev_program_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dev_program_translation}}', [
            'id' => $this->primaryKey(),
            'dev_program_id' => $this->integer(),
            'language' => $this->string('16'),
            'name' => $this->string('255'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dev_program_translation}}');
    }
}
