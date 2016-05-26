<?php
namespace backend\controllers;
use yii\data\Pagination;
use backend\models\Message;
/*
		留言审核
*/
class MessagecheckController extends \yii\web\Controller
{
	 public $enableCsrfValidation = false;

   /*- 显示留言审核列表 -*/
	public function actionExamine()
    {
		
        //查询数据库
		$query = Message::find()->where(['m_examine' =>'0']);
			$pages = new Pagination([
				'totalCount' => $query->count(),
				'pageSize'   => 3,
			]);
			$models = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
			//$u_id=$models[0]['u_id'];
			//echo $u_id;die;
			return $this->renderPartial('tables.html', [
				'posts' => $models,
				'pages' => $pages,
			]);
		

			/*
		//查询数据条数
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("select count(*) as count from message where m_examine='0'");
		$arr = $command->queryAll();
		$count=$arr[0]['count'];
		//每页显示条数
		$num=5;
		$page=isset($_GET['page'])?$_GET['page']:1;
		//共多少页
		$pagecount=ceil($count/$num);
		$limit=($page-1)*$num;
		//上一页
		$uppage=$page-1<1?1:$page-1;
		//下一页
		$downpage=$page+1>$pagecount?$pagecount:$page+1;
		$str="<a href='index.php?r=messagecheck/examine&page=1'><input type='button' value='首页' class='ui_input_btn01'/></a>";
		$str.="<a href='index.php?r=messagecheck/examine&page=$uppage'><input type='button' value='上一页' class='ui_input_btn01'/></a>";
		$str.="<a href='index.php?r=messagecheck/examine&page=$downpage'><input type='button' value='下一页' class='ui_input_btn01'/></a>";
		$str.="<a href='index.php?r=messagecheck/examine&page=$pagecount'><input type='button' value='尾页' class='ui_input_btn01'/></a>";
		$command = $connection->createCommand("select * from message inner join user on message.u_id=user.u_id where m_examine='0' limit $limit,$num");
		$posts = $command->queryAll();
		return $this->renderPartial('tables.html',['posts'=>$posts,'str'=>$str]);*/
    }
	   /*- 显示留言已审核列表 -*/
	public function actionYishen()
    {
		
        //查询数据库
		$query = Message::find()->where(['m_examine' =>'0']);
			$pages = new Pagination([
				'totalCount' => $query->count(),
				'pageSize'   => 3,
			]);
			$models = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
			//$u_id=$models[0]['u_id'];
			//echo $u_id;die;
			return $this->renderPartial('shen_list.html', [
				'posts' => $models,
				'pages' => $pages,
			]);
			/*

		//查询数据条数
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("select count(*) as count from message where m_examine='1'");
		$arr = $command->queryAll();
		$count=$arr[0]['count'];
		//每页显示条数
		$num=5;
		$page=isset($_GET['page'])?$_GET['page']:1;
		//共多少页
		$pagecount=ceil($count/$num);
		$limit=($page-1)*$num;
		//上一页
		$uppage=$page-1<1?1:$page-1;
		//下一页
		$downpage=$page+1>$pagecount?$pagecount:$page+1;
		$str="<a href='index.php?r=messagecheck/yishen&page=1'><input type='button' value='首页' class='ui_input_btn01'/></a>";
		$str.="<a href='index.php?r=messagecheck/yishen&page=$uppage'><input type='button' value='上一页' class='ui_input_btn01'/></a>";
		$str.="<a href='index.php?r=messagecheck/yishen&page=$downpage'><input type='button' value='下一页' class='ui_input_btn01'/></a>";
		$str.="<a href='index.php?r=messagecheck/yishen&page=$pagecount'><input type='button' value='尾页' class='ui_input_btn01'/></a>";
		$command = $connection->createCommand("select * from message inner join user on message.u_id=user.u_id where m_examine='1' limit $limit,$num");
		$posts = $command->queryAll();
		return $this->renderPartial('shen_list.html',['posts'=>$posts,'str'=>$str]);*/
    }



	/*- 留言审核通过 -*/
	public function actionUpd(){
		$id=$_GET['id'];
		//echo $id;die;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("update message set m_examine='1' where m_id=$id");
		$arr = $command->execute();
		if($arr){
			echo 1;
		}else{
			echo 3;
		}
	}	
	/*- 留言审核不通过 -*/
	public function actionUpds(){
		$id=$_GET['id'];
		//echo $id;die;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("update message set m_examine='2' where m_id=$id");
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
		$command = $connection->createCommand("delete from message where m_id=$id");
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
		$command = $connection->createCommand("delete from message where m_id in($id)");
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
		$command = $connection->createCommand("update message set m_examine='1' where m_id in($id)");
		$arr = $command->execute();
		if($arr){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	
}
