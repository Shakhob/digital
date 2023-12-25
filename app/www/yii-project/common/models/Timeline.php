<?php

namespace common\models;

use creocoder\translateable\TranslateableBehavior;
use Yii;

/**
 * This is the model class for table "timeline".
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property string $step
 * @property int|null $sort
 * @property int|null $status
 */
class Timeline extends \yii\db\ActiveRecord
{
    public $name_ru;
    public $name_en;
    public function behaviors()
    {
        return [
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['name'],
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
        return 'timeline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date'], 'required'],
            [['sort', 'status'], 'integer'],
            [['name', 'date', 'step'], 'string', 'max' => 255],
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
            'date' => 'Date',
            'step' => 'Step',
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
        return $this->hasMany(TimelineTranslation::className(), ['timeline_id' => 'id']);
    }
}
