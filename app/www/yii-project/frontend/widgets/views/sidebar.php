<div class="fixed_links">
    <nav class="tabs">
        <?php if(!empty($models)): ?>
            <?php foreach ($models as $model): ?>
                <a href="<?=$model->link?>">
                    <?php $image = \common\components\StaticFunctions::getImage($model->image, 'social', $model->id) ?>
                    <?=$image?>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </nav>
</div>