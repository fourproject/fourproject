<?php

namespace backend\controllers;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
		//跳转到主界面
        $this->layout = false;
        return $this->render('index.html');
    }

}
