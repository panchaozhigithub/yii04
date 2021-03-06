<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '评论列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这条评论吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'content:ntext',
            //'status',
            [
                'attribute' => 'status',
                'value' => $model->status0->name,
            ],
            //'created_at',
            [
                'attribute' => 'created_at',
                'value' => date("Y-m-d H:i:s", $model->created_at),
            ],
            //'user_id',
            [
                'attribute' => 'user_id',
                'value' => $model->user->username,
            ],
            'email:email',
            'url:url',
            //'post_id',
            [
                'attribute' => 'post_id',
                'value' => $model->post->title,
            ],
        ],
    ]) ?>

</div>
