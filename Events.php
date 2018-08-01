<?php

namespace humhub\modules\tags;

use Yii;
use yii\helpers\Url;

class Events
{

    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => Yii::t('TagsModule.base', 'Search Suggestions'),
            'icon' => '<i class="fa fa-tags"></i>',
            'url' => Url::to(['/tags/view']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'tags' && Yii::$app->controller->id == 'view'),
        ));
    }

}

