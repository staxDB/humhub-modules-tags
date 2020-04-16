<?php

use yii\helpers\Html;
use humhub\modules\tags\widgets\GlobalConfigMenu;
use humhub\widgets\Button;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $models [] \humhub\modules\tags\models\Tag */

$this->title = Yii::t('TagsModule.base', 'Tags');

$helpBlock = Yii::t('TagsModule.config', 'Here you can configure custom tags');
$backUrl = Url::to(['/admin/module']);
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('TagsModule.forms', '<strong>Tags</strong> module configuration'); ?>
    </div>

    <?= GlobalConfigMenu::widget() ?>

    <div class="panel-body">
        <h4>
            <?= Yii::t('TagsModule.config', 'Custom tags settings'); ?>
        </h4>

        <div class="help-block">
            <?= $helpBlock ?>
        </div>

        <div>
            <p>
                <?= Html::a('<i class="fa fa-pencil-square-o edit"></i> ' . Yii::t('TagsModule.base', 'Create'), ['create'], ['class' => 'btn-sm btn-success']) ?>
            </p>
        </div>

        <?php if (isset($models) && !empty($models)): ?>
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th><?= Yii::t('TagsModule.models_Tag', 'Title'); ?></th>
                    <th><?= Yii::t('TagsModule.models_Tag', 'Keyword'); ?></th>
                    <th><?= Yii::t('TagsModule.base', 'Actions'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($models as $item): ?>
                    <tr>
                        <td><?= Html::encode($item->title) ?></td>
                        <td><?= Html::encode($item->keyword) ?></td>
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
        <?php else:  ?>
        <p>
                <?= Yii::t('TagsModule.config', 'No custom tags created yet'); ?>
        </p>
        <?php endif; ?>

        <?= Button::defaultType(Yii::t('TagsModule.forms', 'Back to modules'))->link($backUrl)->loader(false); ?>

    </div>
</div>