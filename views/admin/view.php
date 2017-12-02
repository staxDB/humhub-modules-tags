<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model humhub\modules\tags\models\Tag */

$this->title = $model->title;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
        <?= Html::a('<i class="fa fa-pencil-square-o edit"></i> ' . Yii::t('TagsModule.base', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn-sm btn-primary']); ?>

        <?= Html::a('<i class="fa fa-trash-o delete"></i> ' . Yii::t('TagsModule.base', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn-sm btn-danger',
            'data' => [
                'confirm' => Yii::t('TagsModule.base', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        </p>
    </div>
    <div class="panel-body">

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'title',
                'description:ntext',
                'url:url',
            ],
        ]) ?>
    </br>
    <div >
        <?= Html::a(Yii::t('TagsModule.base', 'Back to overview'), Url::to('/tags/admin/index'), ['class' => 'btn-sm btn-default']) ?>
    </div>
</div>
