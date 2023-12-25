<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property int $id
 * @property int|null $year
 * @property int|null $position
 * @property int|null $sort
 * @property int|null $status
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'position', 'sort', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year' => 'Year',
            'position' => 'Position',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }
}
