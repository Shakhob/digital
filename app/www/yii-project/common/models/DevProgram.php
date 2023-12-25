<?php

namespace common\models;

use creocoder\translateable\TranslateableBehavior;
use Yii;

/**
 * This is the model class for table "dev_program".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $file
 * @property int|null $status
 */
class DevProgram extends \yii\db\ActiveRecord
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
        return 'dev_program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name', 'file'], 'string', 'max' => 255],
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
            'file' => 'File',
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
        return $this->hasMany(DevProgramTranslation::className(), ['dev_program_id' => 'id']);
    }
}
