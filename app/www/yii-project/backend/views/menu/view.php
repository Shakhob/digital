<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Menu $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-view">

    <h1><?php //echo Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
             'parent_id',
//            [                      // the owner name of the model
//                'label' => 'parent_id',
//                'value' => "{$model->parent?->name}" ? "{$model->parent?->name}" : "-",
//            ],
            [                      // the owner name of the model
                'label' => 'name uz',
                'value' =>$model->translate('uz')->name,
            ],
            [                      // the owner name of the model
                'label' => 'name ru',
                'value' =>$model->translate('ru')->name,
            ],
            [                      // the owner name of the model
                'label' => 'name en',
                'value' =>$model->translate('en')->name,
            ],
            // 'name',
            'url:url',
            'menu_order',
            // 'position',
            [
                'label' => 'position',
                'value' => function ($model) {
                    switch ($model->position) {
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
        ],
    ]) ?>

</div>
