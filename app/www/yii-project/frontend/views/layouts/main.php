<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?//= Breadcrumbs::widget([
//    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//]) ?>
<?//= Alert::widget() ?>
<body class="">
<?php $this->beginBody() ?>
<div class="wrapper">

    <?=frontend\widgets\Header::widget()?>

    <div class="block">

        <div class="block_right">
            <?= $content ?>
        </div>

    </div>

    <?=frontend\widgets\Footer::widget()?>


</div>





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
