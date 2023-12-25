<?php
namespace backend\widgets;

use common\models\User;
use Yii;
use yii\bootstrap5\Widget;

class Header extends Widget
{
    public function run()
    {
        $user = User::findOne(Yii::$app->user->id);
        return $this->render('header',[
            'user' => $user
        ]);
    }
}