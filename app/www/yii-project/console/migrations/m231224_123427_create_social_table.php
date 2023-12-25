<?php
use yii\db\Migration;

/**
 * Handles the creation of table `{{%social}}`.
 */
class m231224_123427_create_social_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('social', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'image' => $this->string()->notNull(),
            'mobile_image' => $this->string(), // Добавляем новый столбец
            'link' => $this->string(),
            'sort' => $this->integer(),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%social}}');
    }
}
