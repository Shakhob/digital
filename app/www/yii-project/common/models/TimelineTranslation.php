<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "timeline_translation".
 *
 * @property int $id
 * @property int|null $timeline_id
 * @property string|null $language
 * @property string|null $name
 * @property string|null $step
 */
class TimelineTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'timeline_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['timeline_id'], 'integer'],
            [['language'], 'string', 'max' => 16],
            [['name', 'step'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'timeline_id' => 'Timeline ID',
            'language' => 'Language',
            'name' => 'Name',
            'step' => 'Step',
        ];
    }
}
