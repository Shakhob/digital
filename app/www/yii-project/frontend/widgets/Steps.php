<?php


namespace frontend\widgets;


use common\models\Step;
use yii\base\Widget;

class Steps extends Widget
{
    public function run()
    {
        $table = new Step();
        $models = $table::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->limit('3')->all();
        return $this->render('steps',[
            'models'=>$models,
        ]);
    }
}