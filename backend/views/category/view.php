<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
        'bordered'=>true,
        'panel'=>[
            'heading'=>'Category # ' . $model->id,
            'type'=>DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'id',
            'title',
            'description',
            [
                'attribute'=>'image',
                'format'=>'raw',
                'label'=>'Image',
                'value'=> Html::img('@web/uploads/'. $model->image , ['width'=>'60px']),

            ],
        ],
    ]) ?>

</div>
