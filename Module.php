<?php

namespace humhub\modules\tags;

use humhub\modules\tags\models\Tag;
use yii\helpers\Url;
use Yii;


class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function disable()
    {
//        foreach (Tag::find()->all() as $item) {
//            $item->delete();
//        }

        parent::disable();
    }

    public function getConfigUrl()
    {
        return Url::to(['/tags/admin/index']);
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return Yii::t('TagsModule.base', 'Tags');
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return Yii::t('TagsModule.base', 'Simple Module for adding Tags-page');
    }

}