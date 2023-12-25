<section class="approbation">
    <div class="bg_left">
        <img src="images/history_bg_left.png" alt="">
    </div>
    <div class="container">
        <div class="section_header">
            <div class="section_title">
                <?=Yii::t('app','APPROBATION')?>
            </div>

            <div class="text"><?=Yii::t('app','public services')?></div>
        </div>
        <div class="overflow_scroll">
            <div class="row">
                <?php if(!empty($models)): ?>
                    <?php foreach ($models as $key=>$model): ?>
                        <div class="item">
                            <div class="step">
                                <?=Yii::t('app','STEP')?> <?=$key+1?>
                            </div>
                            <div class="item_action">
                                <a href="#" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                                        <path d="M23 0.00219727C26.1043 0.00219727 29.1166 0.610516 31.9531 1.81027C34.6921 2.96877 37.1517 4.62695 39.2635 6.73874C41.3753 8.85054 43.0334 11.3101 44.1919 14.0491C45.3917 16.8856 46 19.8979 46 23.0022C46 26.1065 45.3917 29.1188 44.1919 31.9553C43.0334 34.6943 41.3753 37.1539 39.2635 39.2657C37.1517 41.3774 34.6921 43.0356 31.9531 44.1941C29.1166 45.3939 26.1043 46.0022 23 46.0022C19.8957 46.0022 16.8834 45.3939 14.0469 44.1941C11.3079 43.0356 8.84834 41.3774 6.73654 39.2657C4.62475 37.1539 2.96657 34.6943 1.80807 31.9553C0.608318 29.1188 0 26.1065 0 23.0022C0 19.8979 0.608318 16.8856 1.80807 14.0491C2.96657 11.3101 4.62475 8.85054 6.73654 6.73874C8.84834 4.62695 11.3079 2.96877 14.0469 1.81027C16.8834 0.610516 19.8957 0.00219727 23 0.00219727ZM23 43.0022C34.028 43.0022 43 34.0302 43 23.0022C43 11.9742 34.028 3.0022 23 3.0022C11.972 3.0022 3 11.9742 3 23.0022C3 34.0302 11.972 43.0022 23 43.0022Z" fill="url(#paint0_linear_202_1056)"/>
                                        <path d="M23 33.1021C22.6161 33.1021 22.2322 32.9557 21.9393 32.6628C21.3536 32.077 21.3536 31.1272 21.9393 30.5414L29.4787 23.0021L21.9393 15.4628C21.3536 14.877 21.3536 13.9272 21.9393 13.3414C22.5251 12.7557 23.4749 12.7557 24.0607 13.3414L32.6607 21.9414C33.2465 22.5272 33.2465 23.477 32.6607 24.0628L24.0607 32.6628C23.7678 32.9557 23.3839 33.1021 23 33.1021Z" fill="url(#paint1_linear_202_1056)"/>
                                        <path d="M31.5999 24.5022H14.3999C13.5715 24.5022 12.8999 23.8306 12.8999 23.0022C12.8999 22.1738 13.5715 21.5022 14.3999 21.5022H31.5999C32.4283 21.5022 33.0999 22.1738 33.0999 23.0022C33.0999 23.8306 32.4283 24.5022 31.5999 24.5022Z" fill="url(#paint2_linear_202_1056)"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_202_1056" x1="-8.99451" y1="67.6984" x2="46" y2="67.6984" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0094CB"/>
                                                <stop offset="1" stop-color="#96DCCB"/>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_202_1056" x1="19.2318" y1="42.6296" x2="33.1" y2="42.6296" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0094CB"/>
                                                <stop offset="1" stop-color="#96DCCB"/>
                                            </linearGradient>
                                            <linearGradient id="paint2_linear_202_1056" x1="8.95014" y1="25.9172" x2="33.0999" y2="25.9172" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0094CB"/>
                                                <stop offset="1" stop-color="#96DCCB"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="text">
                                <?= nl2br(Yii::t('app', str_replace('/n', "\n", $model->translate(Yii::$app->language)->name))) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>