<?php


namespace frontend\widgets;


use common\models\Timeline;
use yii\base\Widget;

class History extends Widget
{
    public function run()
    {
        $table = new Timeline();
        $models_top = $table::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->limit('3')->all();
        $models_bottom = $table::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->offset(3)->limit('4')->all();
        return $this->render('timeline',[
            'models_top'=>$models_top,
            'models_bottom'=>$models_bottom,
        ]);
    }
}