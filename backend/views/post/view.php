<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

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
        'attributes' => [
            'id',
            'title',
            'content:ntext',
            'tags:ntext',
            //'status',
            [
                'attribute'=>'status',
                'value'=> $model->status0->name,
            ],
            //'created_at',
            [
                'attribute'=>'created_at',
                'value'=> date("Y-m-d H:i:s"),
            ],
            //'updated_at',
            [
                'attribute'=>'updated_at',
                'value'=> date("Y-m-d H:i:s"),
            ],
            //'author_id',
            [
                'attribute'=>'author_id',
                'value'=> $model->author->nickname,
            ],
        ],
    ]) ?>

</div>
