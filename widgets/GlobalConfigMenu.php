<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

/**
 * @author davidborn
 */

namespace humhub\modules\tags\widgets;


use Yii;
use yii\helpers\Url;
use humhub\widgets\SettingsTabs;

class GlobalConfigMenu extends SettingsTabs
{

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->items = [
            [
                'label' => Yii::t('TagsModule.widgets', 'Default settings'),
                'url' => Url::toRoute(['/tags/admin/index']),
                'active' => $this->isCurrentRoute('tags', 'admin', 'index'),
                'sortOrder' => 10
            ],
            [
                'label' => Yii::t('TagsModule.widgets', 'Custom tags'),
                'url' => Url::toRoute(['/tags/admin/config']),
                'active' => $this->isCurrentRoute('tags', 'admin', 'config'),
                'sortOrder' => 20
            ],
        ];

        parent::init();
    }

}