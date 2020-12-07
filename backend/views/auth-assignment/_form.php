<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthAssignment */
/* @var $form yii\widgets\ActiveForm */

/* @var $userList common\models\User */
/* @var $rolesList backend\models\AuthItem */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form -> field($model, 'user_id') -> widget(Select2 ::className(), [
        'data' => $userList,
        'hideSearch' => true,
        'theme' => Select2::THEME_KRAJEE,
        'size' => Select2::LARGE,
        'options' => [
            'placeholder' => 'Select a User ...',
            'options' => [
//                3 => ['disabled' => true]
            ]
        ],
        'pluginOptions' => [
            'alowClear' => true
        ],
    ]) ?>
    <?= $form -> field($model, 'item_name') -> widget(Select2 ::className(), [
        'data' => $rolesList,
        'hideSearch' => true,
        'theme' => Select2::THEME_KRAJEE,
        'size' => Select2::LARGE,
        'options' => [
            'placeholder' => 'Select a Role ...',
            'options' => [
//                3 => ['disabled' => true]
            ]
        ],
        'pluginOptions' => [
            'alowClear' => true
        ],
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
