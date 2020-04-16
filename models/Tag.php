<?php

namespace humhub\modules\tags\models;

use Yii;
use humhub\components\ActiveRecord;
/**
 * This is the model class for table "custom_tag".
 *
 * @property integer $id
 * @property string $title
 * @property string $keyword
 */
class Tag extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'custom_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 60],
            [['keyword'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('TagsModule.models_Tag', 'ID'),
            'title' => Yii::t('TagsModule.models_Tag', 'Title'),
            'keyword' => Yii::t('TagsModule.models_Tag', 'Keyword'),
        ];
    }
}
