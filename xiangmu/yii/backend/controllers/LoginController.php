<?php

namespace backend\controllers;

class LoginController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('login');
    }
    public function actionLogin(){
        //if(登录成功的话){
        //      Cookie记住密码，自动免登录天
        //}
        $this->layout = false;
        $this->redirect("index.php?r=index/index");
    }

}
