<?php

use kartik\select2\Select2;
use unclead\multipleinput\MultipleInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $catList backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">
    <?php $form = ActiveForm ::begin(); ?>
    <?= $form -> field($model, 'title') -> textInput(['maxlength' => true]) ?>
    <?= $form -> field($model, 'category_id') -> widget(Select2 ::className(), [
        'data' => $catList,
        'hideSearch' => true,
        'theme' => Select2::THEME_KRAJEE,
        'size' => Select2::LARGE,
        'options' => [
            'placeholder' => 'Select a Category ...',
            'options' => [
//                3 => ['disabled' => true]
            ]
        ],
        'pluginOptions' => [
            'alowClear' => true
        ],
    ]) ?>
    <?= $form -> field($model, 'description') -> textarea(['maxlength' => true]) ?>
    <?= $form -> field($model, 'options') -> widget(MultipleInput ::className(), [
        'max' => 6,
        'columns' => [
            [
                'name' => 'color',
                'type' => 'dropDownList',
                'title' => 'color',
                'items' => [
                    'gold' => 'gold',
                    'silver' => 'silver',
                    'black' => 'black',
                    'white' => 'white',
                    'red' => 'red',
                    'blue' => 'blue',
                ],
            ],
            [
                    'name'=>'price',
                    'title'=>'price',
            ],
        ],
        'allowEmptyList'=>false,
        'enableGuessTitle'=>true,
        'addButtonPosition'=>MultipleInput::POS_HEADER,
    ])->label(false) ?>

    <?= $form -> field($model, 'image') -> fileInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html ::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm ::end(); ?>
</div>
