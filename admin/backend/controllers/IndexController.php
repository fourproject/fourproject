<?php

namespace backend\controllers;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
		//��ת��������
        $this->layout = false;
        return $this->render('index.html');
    }

}
