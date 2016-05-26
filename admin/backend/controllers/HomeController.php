<?php
namespace backend\controllers;
use yii\data\Pagination;
use backend\models\Message;
use backend\models\Home;
/*
		留言审核
*/
class HomeController extends \yii\web\Controller
{
	 public $enableCsrfValidation = false;

   /*- 显示房源审核列表 -*/
	public function actionExamine()
    {
		
        //查询数据库
		$query = Home::find()->where(['h_examine' =>'0']);
			$pages = new Pagination([
				'totalCount' => $query->count(),
				'pageSize'   => 3,
			]);
			$models = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
			//var_dump($models);die;
			//$u_id=$models[0]['u_id'];
			//echo $u_id;die;
			return $this->renderPartial('tables.html', [
				'posts' => $models,
				'pages' => $pages,
			]);
			
    }
	   /*- 显示房源列表 -*/
	public function actionList()
    {
		
        //查询数据库
		$query = Home::find()->where(['h_examine' =>'1']);
			$pages = new Pagination([
				'totalCount' => $query->count(),
				'pageSize'   => 3,
			]);
			$models = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
			//$u_id=$models[0]['u_id'];
			//echo $u_id;die;
			return $this->renderPartial('list.html', [
				'posts' => $models,
				'pages' => $pages,
			]);
		
    }



	/*- 房源审核通过 -*/
	public function actionUpd(){
		$id=$_GET['id'];
		//echo $id;die;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("update home set h_examine='1' where h_id=$id");
		$arr = $command->execute();
		if($arr){
			echo 1;
		}else{
			echo 3;
		}
	}	
	/*- 房源审核不通过 -*/
	public function actionUpds(){
		//获取要修改的id
		$id=$_GET['id'];
		//echo $id;die;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("update home set h_examine='2' where h_id=$id");
		$arr = $command->execute();
		if($arr){
			echo 2;
		}else{
			echo 3;
		}
	}
	/*- 留言单个删除 -*/
	public function actionDel(){
		$id=$_GET['id'];
		//echo $id;die;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("delete from home where h_id=$id");
		$arr = $command->execute();
		if($arr){
			echo 1;
		}else{
			echo 0;
		}
	}
	/*- 留言批量删除 -*/
	public function actionDels(){
		$id=$_GET['str'];
		//echo $id;die;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("delete from home where h_id in($id)");
		$arr = $command->execute();
		if($arr){
			echo 1;
		}else{
			echo 0;
		}
	}
	/*- 留言批量通过 -*/
	public function actionPass(){
		$id=$_GET['str'];
		//echo $id;die;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("update home set h_examine='1' where h_id in($id)");
		$arr = $command->execute();
		if($arr){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	
}
