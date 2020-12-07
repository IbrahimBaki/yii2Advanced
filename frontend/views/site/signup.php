<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2><?= $this->title ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="clo-md-12">
                <h1><?= Html::encode($this->title) ?></h1>
                <p>Please fill out the following fields to signup:</p>
                <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                    'options'=>[
                        'class'=>'main_form'
                    ],
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                    ]); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    </div>
                    <div class="col-lg-12">
                        <?= $form->field($model, 'email') ?>
                    </div>
                    <div class="col-lg-12">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                        <div class="col-md-5 mb-50">
                            <?= Html ::submitButton('SignUp', ['class' => 'send']) ?>
                        </div>
                </div>
                    <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>

