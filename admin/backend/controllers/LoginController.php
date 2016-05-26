<?php
namespace backend\controllers;
use Yii;
use yii\data\Pagination;
use backend\models\Admin;
class LoginController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
	public function __autoload(){
		echo 111;die;
	}
    public function actionIndex()
    {
        //跳转到登录界面
        //将yii自带的导航栏删掉
        $this->layout = false;
        //进行跳转
        return $this->render('login.html');
    }
    public function actionLogin(){
        //讲yii自带的导航按去掉
        $this->layout = false;
        //获取到用户登录的用户名和密码
	    $username=Yii::$app->request->Post()['username'];//post
        $userpwd=Yii::$app->request->Post()['password'];
        //判断账号密码是否为空
        if($username==''){
            //如果用户名是空的话  提示并跳转回登录界面
            echo "<script>alert('请输入账号')</script>";
            return $this->render('login');
        }else if($userpwd==''){
            //如果密码是空的话  提示并跳转回登录界面
            echo "<script>alert('请输入密码')</script>";
            return $this->render('login');
        }else{
            //实例化数据库
            $connection = \Yii::$app->db;
            //拼写sql语句
            $sql="select * from admin  where a_username='$username'";
            //执行sql语句
            $command = $connection->createCommand($sql);
            //获取结果集
            $posts = $command->queryAll();
            //对结果集进行判断
            if(empty($posts)){
                //如果结果集是空的活
                //说明没有此用户
                echo "<script>alert('暂无此用户')</script>";
                return $this->render('login');
            }else{
                //结果集有值的话
                //对密码进行判断
                if($posts[0]['a_userpwd']==$userpwd){
                    //如果密码正确的话
                    //跳转到主界面
					$session = \Yii::$app->session;
				$session->set('username',$username);

                    echo "<script>alert('登录成功')</script>";
                    $this->redirect("index.php?r=index/index");
                }else{
                    echo "<script>alert('密码错误')</script>";
                    return $this->render('login');
                }
            }

        }


    }

}
