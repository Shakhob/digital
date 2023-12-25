<section class="development_program">
    <div class="container">
        <div class="section_title">
            <?=Yii::t('app','Development program')?>
        </div>
        <div class="text">
            <?=Yii::t('app','Documents for review and download')?>

        </div>

        <div class="row">

            <?php if(!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <div class="item">
                        <span>
                          <?=$model->translate(Yii::$app->language)->name?>
                        </span>
                        <a href="<?=$model->file?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="38" viewBox="0 0 32 38" fill="none">
                                <path d="M19.1255 10.9408V0.718862C20.5523 1.25957 21.865 2.09251 22.9777 3.20363L28.4223 8.65135C29.5349 9.76246 30.3679 11.0752 30.9086 12.502H20.6882C19.8256 12.502 19.1255 11.8003 19.1255 10.9392L19.1255 10.9408ZM31.5899 15.629H20.6882C18.1035 15.629 16 13.5255 16 10.9408V0.0375059C15.7484 0.0203157 15.4968 0 15.2421 0H8.18628C3.87779 0.00156275 0.372559 3.5068 0.372559 7.81528V29.6937C0.372559 34.0022 3.87779 37.5074 8.18628 37.5074H23.8137C28.1222 37.5074 31.6274 34.0022 31.6274 29.6937V16.3869C31.6274 16.1322 31.6071 15.8806 31.5899 15.629ZM21.7931 28.9217L19.2724 31.444C18.3707 32.3457 17.1846 32.7973 16 32.7973C14.8154 32.7973 13.6293 32.3457 12.7276 31.444L10.2069 28.9217C9.59587 28.3107 9.59587 27.3215 10.2069 26.712C10.8179 26.101 11.8056 26.101 12.4166 26.712L14.4373 28.7326V21.8597C14.4373 20.997 15.1358 20.2969 16 20.2969C16.8642 20.2969 17.5627 20.997 17.5627 21.8597V28.7326L19.5834 26.712C20.1944 26.101 21.1821 26.101 21.7931 26.712C22.4041 27.3215 22.4041 28.3107 21.7931 28.9217Z" fill="url(#paint0_linear_202_900)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_202_900" x1="-5.7388" y1="55.198" x2="31.6274" y2="55.198" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0094CB"/>
                                        <stop offset="1" stop-color="#96DCCB"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>