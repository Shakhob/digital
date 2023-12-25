<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dev_program_translation".
 *
 * @property int $id
 * @property int|null $dev_program_id
 * @property string|null $language
 * @property string|null $name
 */
class DevProgramTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dev_program_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dev_program_id'], 'integer'],
            [['language'], 'string', 'max' => 16],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dev_program_id' => 'Dev Program ID',
            'language' => 'Language',
            'name' => 'Name',
        ];
    }
}
