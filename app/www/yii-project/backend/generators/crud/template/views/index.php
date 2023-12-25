<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/** @var yii\web\View $this */
/** @var yii\gii\generators\crud\Generator $generator */

$modelClass = StringHelper::basename($generator->modelClass);

echo "<?php\n";
?>

use <?= $generator->modelClass ?>;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/** @var yii\web\View $this */
<?= !empty($generator->searchModelClass) ? "/** @var " . ltrim($generator->searchModelClass, '\\') . " \$searchModel */\n" : '' ?>
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h1><?= "<?= " ?>Html::encode($this->title) ?></h1>
        <?= "<?= " ?>Html::a( Yii::t('app','Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="card-body">
        <?= $generator->enablePjax ? "<?php Pjax::begin(); ?>\n" : '' ?>
        <?php if (!empty($generator->searchModelClass)): ?>
            <?= "<?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
        <?php endif; ?>

        <?php if ($generator->indexWidgetType === 'grid'): ?>
            <?= "<?= " ?>GridView::widget([
            'dataProvider' => $dataProvider,
            <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
            ['class' => 'yii\grid\SerialColumn',
            'contentOptions' => ['class' => 'align-middle'],
            ],

            <?php
            $count = 0;
            if (($tableSchema = $generator->getTableSchema()) === false) {
                foreach ($generator->getColumnNames() as $name) {
                    if (++$count < 6) {
                        echo "            '" . $name . "',\n";
                    } else {
                        echo "            //'" . $name . "',\n";
                    }
                }
            } else {
                foreach ($tableSchema->columns as $column) {
                    $format = $generator->generateColumnFormat($column);
                    if (++$count < 6) {
                        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                    } else {
                        echo "            //'" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                    }
                }
            }
            ?>
            [
            'class' => 'yii\grid\ActionColumn',
            'header' => Yii::t('app', 'Actions'),
            'template' => '{buttons}',
            'buttons' => [
            'buttons' => function ($url, $model) {

            $viewButton = Html::a(
            '<i class="align-middle" data-feather="eye"></i>',
            ['view', 'id' => $model->id, 'language' => Yii::$app->language],
            ['class' => 'btn btn-info']
            );

            $updateButton = Html::a(
            '<i class="align-middle" data-feather="edit"></i>',
            ['update', 'id' => $model->id, 'language' => Yii::$app->language],
            ['class' => 'btn btn-info']
            );

            $deleteButton = Html::a(
            '<i class="align-middle" data-feather="trash"></i>',
            ['delete', 'id' => $model->id, 'language' => Yii::$app->language],
            [
            'class' => 'btn btn-danger',
            'data' => [
            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
            'method' => 'post',
            ],
            ]
            );

            // Объединяем кнопки в одну строку
            $buttonsHtml = "<div class=\"d-flex align-items-center gap-1 justify-content-center\">{$viewButton}{$updateButton}{$deleteButton}</div>";

        return $buttonsHtml;
            }
            ],
            ],
            ],
            ]); ?>
        <?php else: ?>
            <?= "<?= " ?>ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $generator->getNameAttribute() ?>), ['view', <?= $generator->generateUrlParams() ?>]);
            },
            ]) ?>
        <?php endif; ?>

        <?= $generator->enablePjax ? "<?php Pjax::end(); ?>\n" : '' ?>
    </div>
</div>
