<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post_translation".
 *
 * @property int $id
 * @property int|null $post_id
 * @property string|null $language
 * @property string|null $title
 * @property string|null $category
 * @property string|null $prev_text
 */
class PostTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id'], 'integer'],
            [['prev_text'], 'string'],
            [['language'], 'string', 'max' => 16],
            [['title', 'category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'language' => 'Language',
            'title' => 'Title',
            'category' => 'Category',
            'prev_text' => 'Text',
        ];
    }
}
