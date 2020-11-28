<?php

use kartik\detail\DetailView;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

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
            'heading'=>'Product # ' . $model->id,
            'type'=>DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'id',
            'title',
            [
                'attribute'=>'category_id',
                'value'=> $model->category->title,
            ],
            'description',
            [
                'attribute' => 'image',
                'format'=>'html',
                'label'=>'Image',
                'value'=>Html::img('@web/uploads/'.$model->image,['width'=>'60px']),
            ],
            [
                'attribute'=>'created_at',
                'value'=>date('Y-m-d',$model->created_at),
            ],
            [
                'attribute'=>'updated_at',
                'value'=>date('Y-m-d',$model->updated_at),
            ],
        ],
    ]) ?>

</div>
