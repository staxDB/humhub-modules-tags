<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $models  */

$this->title = Yii::t('TagsModule.base', 'Tags')
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('<i class="fa fa-pencil-square-o edit"></i> ' . Yii::t('TagsModule.base', 'Create'), ['create'], ['class' => 'btn-sm btn-success']) ?>
        </p>
    </div>

    <div class="panel-body">
        <?php if (isset($models)): ?>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th><?= Yii::t('TagsModule.models_Tag', 'Title'); ?></th>
                <th><?= Yii::t('TagsModule.base', 'Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($models as $item): ?>
                <tr>
                    <td><?= Html::encode($item->title) ?></td>
                    <td>
                        <?= Html::a('<i class="fa fa-eye view"></i> ' . Yii::t('TagsModule.base', 'View'), ['view', 'id' => $item->id], ['class' => 'btn-sm btn-info']) ?>
                        <?= Html::a('<i class="fa fa-pencil-square-o edit"></i> ' . Yii::t('TagsModule.base', 'Update'), ['update', 'id' => $item->id], ['class' => 'btn-sm btn-primary']) ?>
                        <?= Html::a('<i class="fa fa-trash-o delete"></i> ' . Yii::t('TagsModule.base', 'Delete'), ['delete', 'id' => $item->id], [
                            'class' => 'btn-sm btn-danger',
                            'data' => [
                                'confirm' => Yii::t('TagsModule.base', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
