<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\DevProgram $model */

$this->title = 'Create Dev Program';
$this->params['breadcrumbs'][] = ['label' => 'Dev Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dev-program-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
