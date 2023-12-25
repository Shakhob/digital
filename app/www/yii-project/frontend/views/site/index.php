<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!-- HERO -->
<section class="hero">
    <div class="hero_left" id="animationContainer">
        <img src="images/hero_left.png" alt="">
    </div>
    <div class="hero_right">
        <div class="hero_texts">
            <div class="hero_title">
                Our vision
            </div>
            <div class="hero_description">
                <span>Digital Uzbekistan 2030</span>: Transforming Uzbekistan into an <span>IT-Hub</span> by boosting IT service exports to 5 billion and elevating the country’s position to the <span>top-30</span> in the UN E-Gov Development Index
            </div>
        </div>
    </div>

    <div class="container mobile">
        <div class="hero_right">
            <div class="hero_texts">
                <div class="hero_title">
                    Our vision
                </div>
                <div class="hero_description">
                    <span>Digital Uzbekistan 2030</span>: Transforming Uzbekistan into an <span>IT-Hub</span> by boosting IT service exports to 5 billion and elevating the country’s position to the <span>top-30</span> in the UN E-Gov Development Index
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HERO END -->

<!-- DEVELOPMENT PROGRAM -->
<?=frontend\widgets\Development::widget()?>
<!-- DEVELOPMENT PROGRAM END -->

<!-- HISTORY -->
<?=frontend\widgets\History::widget()?>
<!-- HISTORY END -->

<!--CHARTS-->
<?=frontend\widgets\Charts::widget()?>
<!--CHARTS END-->


<!-- APPROBATION -->
<?=frontend\widgets\Steps::widget()?>
<!-- APPROBATION END -->

<!-- NEWS -->
<?=frontend\widgets\News::widget()?>
<!-- NEWS END -->