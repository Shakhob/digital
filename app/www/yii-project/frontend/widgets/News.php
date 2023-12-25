<?php


namespace frontend\widgets;


use common\models\Post;
use yii\base\Widget;

class News extends Widget
{
    public function run()
    {
        $table = new Post();
        $models = $table::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->limit('3')->all();
        return $this->render('news',[
            'models'=>$models,
        ]);
    }
}