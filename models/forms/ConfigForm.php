<?php

namespace humhub\modules\tags\models\forms;

use Yii;
use \yii\base\Model;
use yii\helpers\Url;

class ConfigForm extends Model
{
    const INCLUDE_CONTENT_TAGS = 'include_contentTags';

    /**
     * general settings
     */
    public $includeContentTags;

    private $settings;

    public function init()
    {
        $this->initSettings();
    }

    private function initSettings()
    {
        $this->includeContentTags = (boolean) $this->getSetting(self::INCLUDE_CONTENT_TAGS, 0);
    }

    /**
     * Returns either the inherited value of $key in case a contentContainer is set or the global value.
     * @return mixed
     */
    public function getSetting($key, $default = null)
    {
        return $this->getSettings()->get($key, $default);
    }

    private function getSettings()
    {
        if(!$this->settings) {
            $module = Yii::$app->getModule('tags');
            $this->settings = $module->settings;
        }

        return $this->settings;
    }
    
    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return [
            [['includeContentTags'],  'boolean'],
        ];
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'includeContentTags' => Yii::t('TagsModule.forms', 'Include content tags'),
        );
    }
    
    /**
     * Saves the given form settings.
     */
    public function save()
    {
        if(!$this->validate()) {
            return false;
        }
        $settings = $this->getSettings();
        $settings->set(self::INCLUDE_CONTENT_TAGS, $this->includeContentTags);
        return true;
    }

    public function getResetButtonUrl()
    {
        return Url::to(['/tags/config/reset-config']);
    }

    public function getSubmitUrl()
    {
        return Url::to(['/tags/admin']);
    }


    /**
     * Static initializer
     * @return \self
     */
    public static function instantiate()
    {
        return new self;
    }
}
