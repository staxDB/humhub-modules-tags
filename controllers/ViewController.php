<?php

namespace humhub\modules\tags\controllers;

use humhub\modules\tags\models\Tag;
use humhub\components\Controller;

class ViewController extends Controller
{
    public function actionIndex()
    {
        $models = Tag::find()->all();

        return $this->render('index', [
        'models' => $models,
        ]);
    }

}
