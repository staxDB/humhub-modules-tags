<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model humhub\modules\tags\models\Tag */

$this->title = Yii::t('TagsModule.base', 'Create Tag')
?>
<div class="panel panel-default">

    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="panel-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
