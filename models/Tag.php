<?php

namespace humhub\modules\tags\models;

use Yii;
use humhub\modules\content\components\ContentActiveRecord;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $url
 */
class Tag extends ContentActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title'], 'string', 'max' => 60],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'url' => Yii::t('app', 'Url'),
        ];
    }
}
