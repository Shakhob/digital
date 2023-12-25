<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
/** @var yii\web\View $this */
/** @var common\models\Timeline $model */

$this->title = 'Update Timeline: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Timelines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="timeline-update">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

<!--    --><?//= $this->render('_form', [
//        'model' => $model,
//    ]) ?>
    <?php $form = ActiveForm::begin(); ?>



    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Uz</button>
            <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Ru</button>
            <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">En</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $form->field($model->translate('uz'), "[uz]name")->textInput()->label("[uz]name");?>
                            <?php echo $form->field($model->translate('uz'), "[uz]step")->textInput()->label("[uz]step");?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                            <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'step')->textInput(['maxlength' => true]) ?>

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
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $form->field($model->translate('ru'), "[ru]name")->textInput()->label("[ru]name");?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <?php echo $form->field($model->translate('en'), "[en]name")->textInput()->label("[en]name");?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="form-group custom-btn">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
