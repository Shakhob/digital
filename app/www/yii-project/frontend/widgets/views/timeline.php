<section class="history">
    <div class="bg_right">
        <img src="images/history_bg.png" alt="">
    </div>
    <div class="container">
        <div class="section_header">
            <div class="section_title">
                <?=Yii::t('app','History timeline')?>
            </div>
            <div class="text">
                <?=Yii::t('app','Formation of digital government in Uzbekistan')?>
            </div>
            <div class="bg_right_mobile">
                <img src="images/history_bg_mobile.png" alt="" class="mobile_bg">
            </div>
        </div>

        <div class="row mobile_none">

            <div class="border">
                <?php if(!empty($models_top)): ?>
                    <?php foreach ($models_top as $key=>$model): ?>
                        <div class="item">
                            <div class="row_block">
                                <div class="head">
                                    <span><?="0".$key+1?></span>
                                    <span><?=Yii::t('app',"STEP")?></span>
                                </div>
                                <div class="dot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2235 20.3439C15.4419 20.3439 19.698 16.0879 19.698 10.8675C19.698 5.64915 15.4419 1.39307 10.2235 1.39307C5.00516 1.39307 0.74707 5.64915 0.74707 10.8675C0.74707 16.0879 5.00516 20.3439 10.2235 20.3439Z" fill="url(#paint0_linear_202_838)" stroke="black"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_202_838" x1="13.6457" y1="31.3264" x2="8.42623" y2="31.3264" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0094CB"/>
                                                <stop offset="0.707081" stop-color="#4ACF78"/>
                                                <stop offset="1" stop-color="#0094CB"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="body">
                                    <span><?=$model->date?></span>
                                    <?=$model->translate(Yii::$app->language)->name?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="border second">
                <?php if(!empty($models_bottom)): ?>
                    <?php foreach ($models_bottom as $key=>$model): ?>
                        <div class="item">
                            <div class="row_block">
                                <div class="head">
                                    <span><?="0".$key+1?></span>
                                    <span><?=Yii::t('app',"STEP")?></span>
                                </div>
                                <div class="dot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2235 20.3439C15.4419 20.3439 19.698 16.0879 19.698 10.8675C19.698 5.64915 15.4419 1.39307 10.2235 1.39307C5.00516 1.39307 0.74707 5.64915 0.74707 10.8675C0.74707 16.0879 5.00516 20.3439 10.2235 20.3439Z" fill="url(#paint0_linear_202_838)" stroke="black"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_202_838" x1="13.6457" y1="31.3264" x2="8.42623" y2="31.3264" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0094CB"/>
                                                <stop offset="0.707081" stop-color="#4ACF78"/>
                                                <stop offset="1" stop-color="#0094CB"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="body">
                                    <span><?=$model->date?></span>
                                    <?=$model->translate(Yii::$app->language)->name?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="overflow_scroll">
            <div class="row desc_none">
                <div class="mobile_item">
                    <div class="head">
                        <span>01</span>
                        <span>STEP</span>
                    </div>
                    <div class="dot_center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5011 20C16.0083 20 20.5 15.5083 20.5 9.99895C20.5 4.4917 16.0083 0 10.5011 0C4.99381 0 0.5 4.4917 0.5 9.99895C0.5 15.5083 4.99381 20 10.5011 20Z" fill="url(#paint0_linear_202_1249)"/>
                            <defs>
                                <linearGradient id="paint0_linear_202_1249" x1="-3.41066" y1="29.4331" x2="20.5" y2="29.4331" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0094CB"/>
                                    <stop offset="1" stop-color="#96DCCB"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="card_description">
                        <div class="number">
                            1997
                        </div>
                        <div class="text">
                            Развитие и <br> совершенствование почтовой <br> связи, информационных <br>систем и телекоммуникаций
                        </div>
                    </div>
                </div>
                <div class="mobile_item">
                    <div class="head">
                        <span>01</span>
                        <span>STEP</span>
                    </div>
                    <div class="dot_center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5011 20C16.0083 20 20.5 15.5083 20.5 9.99895C20.5 4.4917 16.0083 0 10.5011 0C4.99381 0 0.5 4.4917 0.5 9.99895C0.5 15.5083 4.99381 20 10.5011 20Z" fill="url(#paint0_linear_202_1249)"/>
                            <defs>
                                <linearGradient id="paint0_linear_202_1249" x1="-3.41066" y1="29.4331" x2="20.5" y2="29.4331" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0094CB"/>
                                    <stop offset="1" stop-color="#96DCCB"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="card_description">
                        <div class="number">
                            2002
                        </div>
                        <div class="text">
                            Развитие компьютеризации и <br> внедрение информационных <br> систем
                        </div>
                    </div>
                </div>
                <div class="mobile_item">
                    <div class="head">
                        <span>01</span>
                        <span>STEP</span>
                    </div>
                    <div class="dot_center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5011 20C16.0083 20 20.5 15.5083 20.5 9.99895C20.5 4.4917 16.0083 0 10.5011 0C4.99381 0 0.5 4.4917 0.5 9.99895C0.5 15.5083 4.99381 20 10.5011 20Z" fill="url(#paint0_linear_202_1249)"/>
                            <defs>
                                <linearGradient id="paint0_linear_202_1249" x1="-3.41066" y1="29.4331" x2="20.5" y2="29.4331" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0094CB"/>
                                    <stop offset="1" stop-color="#96DCCB"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="card_description">
                        <div class="number">
                            1997
                        </div>
                        <div class="text">
                            Развитие и <br> совершенствование почтовой <br> связи, информационных <br>систем и телекоммуникаций
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>