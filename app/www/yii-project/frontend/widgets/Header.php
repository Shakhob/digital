<?php

namespace frontend\widgets;



use common\models\Menu;
use common\models\Social;

class Header extends \yii\base\Widget
{
    public function run()
    {
        $menu = new Menu();
        $models = $menu::find()->all();
        return $this->render('header',[
            'models'=>$models,
        ]);

    }
}