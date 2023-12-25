<?php

namespace common\models;

use creocoder\translateable\TranslateableBehavior;
use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string|null $category
 * @property string|null $prev_text
 * @property string|null $date
 * @property int|null $sort
 * @property int|null $status
 */
class Post extends \yii\db\ActiveRecord
{
    public $name_ru;
    public $name_en;

    public function behaviors()
    {
        return [
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['name','url'],
                // translationRelation => 'translations',
                // translationLanguageAttribute => 'language',
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['prev_text'], 'string'],
            [['date'], 'safe'],
            [['sort', 'status'], 'integer'],
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
            'title' => 'Title',
            'category' => 'Category',
            'prev_text' => 'Prev Text',
            'date' => 'Date',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }


    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_INSERT | self::OP_UPDATE,
        ];
    }

    public function getTranslations()
    {
        return $this->hasMany(PostTranslation::className(), ['post_id' => 'id']);
    }
}
