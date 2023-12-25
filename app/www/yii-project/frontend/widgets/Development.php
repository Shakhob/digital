<?php


namespace frontend\widgets;


use common\models\DevProgram;
use yii\base\Widget;

class Development extends Widget
{
    public function run()
    {
        $table = new DevProgram();
        $models = $table::find()->where(['status' => 1])->limit('3')->all();
        return $this->render('development',[
            'models'=>$models,
        ]);
    }
}