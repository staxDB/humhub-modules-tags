<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model humhub\modules\tags\models\Tag */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tag',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
