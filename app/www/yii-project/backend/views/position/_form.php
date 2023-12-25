<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Position $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="position-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>
                    <!--                    --><?//= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'sort')->textInput() ?>

                    <?= $form->field($model, 'status', ['options' => ['class' => 'mb-0']])->checkbox([
                        'data-plugin' => 'switchery',
                        'data-color' => '#98a6ad',
                        'data-size' => 'small'
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
