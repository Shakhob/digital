<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?=Yii::t("app","hello")?></p>
    <p><?echo "<pre>"; print_r(Yii::$app->language); echo "</pre>";?></p>

    <code><?= __FILE__ ?></code>
</div>
