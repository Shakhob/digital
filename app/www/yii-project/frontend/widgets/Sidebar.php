<?php


namespace frontend\widgets;


use common\models\Social;

class Sidebar extends \yii\base\Widget
{
    public function run()
    {
        $socials = new Social();
        $models = $socials::find()->where(['status' => 1])->all();
        return $this->render('sidebar',[
            'models'=>$models,
        ]);
    }
}