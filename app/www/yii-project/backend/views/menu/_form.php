<?php

use common\models\Menu;
use yii\bootstrap5\ActiveForm as Bootstrap5ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Menu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="menu-form">


    <?php $form = Bootstrap5ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


                    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>


                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <?php
                    $menu = Menu::find()->all();
                    $menu_items = ArrayHelper::map($menu,'id','name');
                    $menu_params = [
                        'prompt' => 'select menu'
                    ];
                    echo $form->field($model, 'parent_id')->dropDownList($menu_items,$menu_params);
                    ?>
                    <?php //echo $form->field($model, 'parent_id')->textInput() ?>
                    <?php

                    echo $form->field($model, 'position')->dropDownList([
                        '1' => Yii::t('app', 'header_menu_position'),
                        '2' => Yii::t('app', 'footer_menu_position'),
                        '3' => Yii::t('app', 'sidebar_menu_position'),
                    ]);

                    ?>
                    <?php //echo $form->field($model, 'position')->textInput() ?>

                    <?= $form->field($model, 'menu_order')->textInput(['type'=>'number']) ?>

                </div>
            </div>
        </div>
    </div>
    <div class="form-group custom-btn">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php Bootstrap5ActiveForm::end(); ?>

</div>