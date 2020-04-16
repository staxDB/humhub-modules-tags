<?php

namespace humhub\modules\tags\controllers;

use humhub\modules\content\models\ContentTag;
use humhub\modules\tags\models\forms\ConfigForm;
use humhub\modules\tags\models\Tag;
use humhub\components\Controller;

class ViewController extends Controller
{
    public function actionIndex()
    {
        $models = Tag::find()->all();

        $content_tags = null;
        $includeContentTags = ConfigForm::instantiate()->includeContentTags;
        if($includeContentTags) {
            $content_tags = ContentTag::find()->select('name')->distinct()->all();
        }

        return $this->render('index', [
            'models' => $models,
            'content_tags' => $content_tags,
            'includeContentTags' => $includeContentTags,
        ]);
    }

}
