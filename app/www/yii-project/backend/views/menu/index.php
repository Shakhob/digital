<?php

use common\models\Menu;
use yii\bootstrap5\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\MenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Menus');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?php //echo Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Menu'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['class' => 'table table-bordered table-hover'],
        'pager' => [
            'class' => LinkPager::class,
            'options' => ['class' => 'pagination justify-content-start'], // Add Bootstrap 5 classes
        ],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
             'parent_id',
//            [
//                'attribute' => 'parent_id',
//                'contentOptions' => ['class' => ''],
//                'content' => function ($data) {
//                    return "{$data->parent?->name}" ? "{$data->parent?->name}" : "-";
//                }
//            ],

            'name',
            'url:url',
            // 'position',
            [
                'attribute' => 'position',
                'contentOptions' => ['class' => ''],
                'content' => function ($data) {
                    switch ($data->position) {
                        case 1:
                            return Yii::t('app', 'header_menu_position');
                            break;
                        case 2:
                            return Yii::t('app', 'footer_menu_position');
                            break;

                        case 3:
                            return Yii::t('app', 'sidebar_menu_position');
                            break;

                        default:

                            break;
                    }
                }
            ],
            'menu_order',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Menu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
