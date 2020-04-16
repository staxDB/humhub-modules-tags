<?php

use yii\helpers\Html;

/* @var $models [] \humhub\modules\tags\models\Tag */
/* @var $content_tags [] \humhub\modules\content\models\ContentTag */
/* @var $includeContentTags boolean */

$this->title = Yii::t('TagsModule.base', 'Tags');
$searchForm = new \humhub\modules\search\models\forms\SearchForm();
?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong><?= Html::encode($this->title) ?></strong>
        </div>

        <div class="panel-body">
            <?php foreach ($models as $tag): ?>
                <?php $searchForm->keyword = $tag->keyword; ?>
                <?= Html::a('<i class="fa fa-tag"></i> ' . HTML::encode($tag->title), \yii\helpers\Url::toRoute(['/search/search/index', 'SearchForm' => $searchForm]), ['class'=>'btn btn-info', 'data-placement' => 'top', 'style' => 'margin: 5px;']) ?>
            <?php endforeach; ?>
            <?php if ($includeContentTags): ?>
               <?php foreach ($content_tags as $content_tag): ?>
                   <?php $searchForm->keyword = $content_tag->name; ?>
                   <?= Html::a('<i class="fa fa-tag"></i> ' . HTML::encode($content_tag->name), \yii\helpers\Url::toRoute(['/search/search/index', 'SearchForm' => $searchForm]), ['class'=>'btn btn-info', 'data-placement' => 'top', 'style' => 'margin: 5px;']) ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
