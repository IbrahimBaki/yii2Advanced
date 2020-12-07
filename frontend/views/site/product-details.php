<?php

/* @var $this yii\web\View */
/* @var $model app\models\Product */

use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2><?= $model->title ?></h2>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="about">
    <div class="container">
        <div class="row">
            <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about_box">
                    <figure>
                    <?= Html::img(Yii::getAlias('@staticPath/images/').$model->image) ?>
                    </figure>
                </div>
            </dir>
            <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about_box">
                    <h3><?= $model->title ?></h3>
                    <?= $model->description ?>
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </dir>
        </div>
    </div>
</div>


<!-- CHOOSE  -->
<div class="whyschose">
    <div class="container">

        <div class="row">
            <div class="col-md-7 offset-md-3">
                <div class="title">
                    <h2>Why <strong class="black">choose us</strong></h2>
                    <span>Fastest repair service with best price!</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="choose_bg">
    <div class="container">
        <div class="white_bg">
            <div class="row">
                <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for_box">
                        <i><?= Html::img('@web/icon/1.png') ?></i>
                        <h3>Data recovery</h3>
                        <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                    </div>
                </dir>
                <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for_box">
                        <i><?= Html::img('@web/icon/2.png') ?></i>
                        <h3>Computer repair</h3>
                        <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                    </div>
                </dir>
                <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for_box">
                        <i><?= Html::img('@web/icon/3.png') ?></i>
                        <h3>Mobile service</h3>
                        <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                    </div>
                </dir>
                <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for_box">
                        <i><?= Html::img('@web/icon/4.png') ?></i>
                        <h3>Network solutions</h3>
                        <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                    </div>
                </dir>
                <div class="col-md-12">
                    <a class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end CHOOSE -->

<!-- service -->
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Service <strong class="black">Process</strong></h2>
                    <span>Easy and effective way to get your device repair</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                    <i><?= Html::img('@web/icon/service1.png') ?></i>
                    <h3>Fast service</h3>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                    <i><?= Html::img('@web/icon/service2.png') ?></i>
                    <h3>Secure payments</h3>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                    <i><?= Html::img('@web/icon/service3.png') ?></i>
                    <h3>Expert team</h3>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                    <i><?= Html::img('@web/icon/service4.png') ?></i>
                    <h3>Affordable services</h3>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                    <i><?= Html::img('@web/icon/service5.png') ?></i>
                    <h3>90 Days warranty</h3>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                    <i><?= Html::img('@web/icon/service6.png') ?></i>
                    <h3>Award winning</h3>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end service -->

