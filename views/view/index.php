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
                        <?= Html::a('<i class="fa fa-tag"></i> ' . HTML::encode($tag->title), $tag->url, ['class'=>'btn btn-info', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $tag->description, 'style' => 'margin: 5px;']) ?>
            <?php endforeach; ?>
            <script>
                $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        </div>
    </div>
</div>
