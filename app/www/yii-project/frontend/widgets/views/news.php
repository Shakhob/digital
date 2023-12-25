<section class="news">
    <div class="container">
        <div class="row">
            <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <a href="#" class="card_item">
                        <div class="card_image">
                            <img src="images/news_image.png" alt="">
                        </div>
                        <div class="card_actions">
                            <div class="card_header">
                                <div class="card_date">
                                    <span>
                                        <?= Yii::$app->formatter->asDate($model->date, 'php:d') ?>
                                    </span>
                                    <span>
                                        <?= Yii::$app->formatter->asDate($model->date, 'php:M') ?>
                                    </span>
                                </div>
                                <div class="news_title">
                                    <?=$model->translate(Yii::$app->language)->title?>
                                </div>
                            </div>
                            <div class="news_text">
                                <?=$model->translate(Yii::$app->language)->prev_text?>
                            </div>
                            <div class="card_action">
                                <div class="date">
                                    <?= Yii::$app->formatter->asDate($model->date, 'php:d.m.Y') ?>
                                </div>
                                <div class="economic">
                                    <?=$model->translate(Yii::$app->language)->category?>
                                </div>
                            </div>
                        </div>
                    </a>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>