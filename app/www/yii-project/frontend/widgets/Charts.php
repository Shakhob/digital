<?php


namespace frontend\widgets;


use common\models\Position;
use yii\base\Widget;

class Charts extends Widget
{
    public function run()
    {
        $table = new Position();
        $models = $table::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
        return $this->render('charts',[
            'models'=>$models,
        ]);
    }
}