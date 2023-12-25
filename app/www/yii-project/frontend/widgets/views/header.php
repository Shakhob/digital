<header>
    <div class="container">
        <div class="header_logo">
            <a href="#">
                <img src="images/header_logo.png" alt="">
            </a>
            <div class="logo_text">
                <?=Yii::t('app','Digital government')?>
                <span><?=Yii::t('app','Republic of Uzbekistan')?></span>
            </div>
        </div>
        <div class="navs">
            <nav>
                <?php if(!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <a href="<?=$model->url?>"><?=$model->translate(Yii::$app->language)->name?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </nav>

            <div class="dropdown">
                <a href="#" class="language_option dropdown-btn">
                    <span><?=Yii::$app->language;?></span>
                    <img src="images/language_arrow.png" alt="">
                </a>
                <div class="dropdown-content">
                    <?php
                    $string = Yii::$app->request->url;
                    $keywords = array("/en", "/ru", "/uz");
                    $trimmedString = str_replace($keywords, "", $string);
                    ?>
                    <a href="<?php  echo Yii::$app->urlManager->createUrl([$trimmedString, 'language' => 'uz'])?>">uz</a>
                    <a href="<?php echo Yii::$app->urlManager->createUrl([$trimmedString, 'language' => 'ru']) ?>">ru</a>
                    <a href="<?php echo Yii::$app->urlManager->createUrl([$trimmedString, 'language' => 'en']) ?>">en</a>
                </div>
            </div>
        </div>
        <div class="menu_hamburg">
            <div class="hamburg-menu" id="hamburg-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

            <div class="menu-content">
                <div class="container">
                    <div class="row_language">
                        <a href="#">UZ</a>
                        <a href="#" class="active">РУ</a>
                        <a href="#">EN</a>
                    </div>
                    <div class="accordion">
                        <div class="accordion-item">
                            <a href="#" class="accordion-header link_item">
                                Решения
                            </a>
                            <div class="accordion-content">
                                <a href="#">Решения</a>
                            </div>
                        </div>
                        <a href="#" class="link_item">
                            Рейтиги
                        </a>
                        <a href="#" class="link_item">
                            Полезное
                        </a>
                        <a href="#" class="link_item">
                            Контакты
                        </a>
                    </div>

                    <div class="social_links">
                        <a href="#">
                            <img src="images/youtube.png" alt="">
                        </a>
                        <a href="#">
                            <img src="images/facebool.png" alt="">
                        </a>
                        <a href="#">
                            <img src="images/instagram.png" alt="">
                        </a>
                        <a href="#">
                            <img src="images/twitter.png" alt="">
                        </a>
                        <a href="#">
                            <img src="images/telegram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?=frontend\widgets\Sidebar::widget()?>

