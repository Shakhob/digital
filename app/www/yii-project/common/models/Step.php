<?php

namespace common\models;

use creocoder\translateable\TranslateableBehavior;


/**
 * This is the model class for table "step".
 *
 * @property int $id
 * @property string $name
 * @property string|null $link
 * @property int|null $sort
 * @property int|null $status
 */
class Step extends \yii\db\ActiveRecord
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
        return 'step';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['sort', 'status'], 'integer'],
            [['name', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'link' => 'Link',
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
        return $this->hasMany(StepTranslation::className(), ['timeline_id' => 'id']);
    }
}
