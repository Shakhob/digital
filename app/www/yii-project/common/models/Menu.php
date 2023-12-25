<?php

namespace common\models;

use Yii;
use creocoder\translateable\TranslateableBehavior;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $name
 * @property string|null $url
 * @property int|null $position
 * @property int|null $menu_order
 */
class Menu extends \yii\db\ActiveRecord
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
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','url'], 'required'],
            [['parent_id', 'position', 'menu_order'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    public function getParent()
    {
        return $this->hasOne(self::class, ['id' => 'parent_id']);
    }

    public function getChildren()
    {
        return $this->hasMany(self::class, ['parent_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    // public function attributeLabels()
    // {
    //     return [
    //         'id' => Yii::t('app', 'ID'),
    //         'parent_id' => Yii::t('app', 'Parent ID'),
    //         'name' => Yii::t('app', 'Name'),
    //         'url' => Yii::t('app', 'Url'),
    //         'position' => Yii::t('app', 'Position'),
    //         'menu_order' => Yii::t('app', 'Menu Order'),
    //     ];
    // }

    //bu yerda biz labellarni https://github.com/creocoder/yii2-translateable ushbu extension bilan tarjima qilayapmiz
    public function attributeLabels()
    {
        switch (Yii::$app->language) {
            case 'ru':
                return [
                    'name' => 'Заголовок',
                    'position' => 'Позиция',
                ];
            case 'en':
                return [
                    'name' => 'name',
                    'position' => 'position',
                ];
            default:
                return [
                    'name' => 'nomi',
                    'position' => 'joylashuvi',
                ];
        }
    }


    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_INSERT | self::OP_UPDATE,
        ];
    }

    public function getTranslations()
    {
        return $this->hasMany(MenuTranslation::className(), ['menu_id' => 'id']);
    }

}
