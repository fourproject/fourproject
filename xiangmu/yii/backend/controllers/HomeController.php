<?php

namespace backend\controllers;
//房源审核
class HomeController extends \yii\web\Controller
{
    //写好注释
    public function actionExamine()
    {
        $this->layout = false;
        return $this->render('house_list');
    }

}
