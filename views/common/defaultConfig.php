<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */
/* @var $this yii\web\View */
/* @var $model \humhub\modules\tags\models\forms\ConfigForm */

use humhub\modules\tags\widgets\GlobalConfigMenu;
use humhub\widgets\ActiveForm;
use humhub\widgets\Button;
use yii\helpers\Url;

$helpBlock = Yii::t('TagsModule.config', 'Here you can configure default settings for tags module');
$backUrl = Url::to(['/admin/module']);
?>


<div class="panel panel-default">

    <div class="panel-heading"><?= Yii::t('TagsModule.forms', '<strong>Tags</strong> module configuration'); ?></div>

   <?= GlobalConfigMenu::widget() ?>

    <div class="panel-body">
        <?php $form = ActiveForm::begin(['action' => $model->getSubmitUrl()]); ?>
        <h4>
            <?= Yii::t('TagsModule.config', 'Default tags settings'); ?>
        </h4>

        <div class="help-block">
            <?= $helpBlock ?>
        </div>

        <div class="">
            <?= $form->field($model, 'includeContentTags')->checkbox(); ?>
        </div>

        <?= Button::primary(Yii::t('base', 'Save'))->submit() ?>
        <?= Button::defaultType(Yii::t('TagsModule.forms', 'Back to modules'))->link($backUrl)->loader(false); ?>

        <?php ActiveForm::end(); ?>
    </div>
</div>
