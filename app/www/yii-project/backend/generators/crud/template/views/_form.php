<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/** @var yii\web\View $this */
/** @var yii\gii\generators\crud\Generator $generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var <?= ltrim($generator->modelClass, '\\') ?> $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

    <?= "<?php " ?>$form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php foreach ($generator->getColumnNames() as $attribute) {
                        if (in_array($attribute, $safeAttributes)) {
                            echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
                        }
                    } ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= "<?= " ?>Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
