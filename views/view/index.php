<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $models [] \humhub\modules\tags\models\Tag */

$this->title = Yii::t('TagsModule.base', 'Tags')
?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong><?= Html::encode($this->title) ?></strong>
        </div>

        <div class="panel-body">
           <?php foreach ($models as $tag): ?>
            <div class="col-md-2">
                <div class="list-group">
                    <div class="list-group-item">
                        <a class="btn btn-info" href="<?= Html::encode($tag->url); ?>" role="button"><i class="fa fa-tag"></i> <?= Html::encode($tag->title); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
