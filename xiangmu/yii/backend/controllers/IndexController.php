<?php

namespace backend\controllers;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

}
