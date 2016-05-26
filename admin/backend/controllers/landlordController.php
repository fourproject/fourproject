<?php

namespace backend\controllers;
use yii\data\Pagination;
use backend\models\User;

class LandlordController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    //显示房东信息列表
    public function actionLandlord()
    {
  		//查询数据库
		$query = User::find()->where(['u_sf' =>'1']);
			$pages = new Pagination([
				'totalCount' => $query->count(),
				'pageSize'   => 3,
			]);
			$models = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
			//$u_id=$models[0]['u_id'];
			//echo $u_id;die;
			return $this->renderPartial('landlord_list.html', [
				'posts' => $models,
				'pages' => $pages,
			]);
		
		/*
		//实例化数据库
        $connection = \Yii::$app->db;
		//进行查询
        $command = $connection->createCommand("select count(*) as count from user where u_sf='1'");
        $arr = $command->queryAll();
        $count=$arr[0]['count'];
        //每页显示条数
        $num=2;
        $page=isset($_GET['page'])?$_GET['page']:1;
        //共多少页
        $pagecount=ceil($count/$num);
        $limit=($page-1)*$num;
        //上一页
        $uppage=$page-1<1?1:$page-1;
        //下一页
        $downpage=$page+1>$pagecount?$pagecount:$page+1;
        $str="<a href='index.php?r=landlord/landlord&page=1'><input type='button' value='首页' class='ui_input_btn01'/></a>";
        $str.="<a href='index.php?r=landlord/landlord&page=$uppage'><input type='button' value='上一页' class='ui_input_btn01'/></a>";
        $str.="<a href='index.php?r=landlord/landlord&page=$downpage'><input type='button' value='下一页' class='ui_input_btn01'/></a>";
        $str.="<a href='index.php?r=landlord/landlord&page=$pagecount'><input type='button' value='尾页' class='ui_input_btn01'/></a>";
        $command = $connection->createCommand("select * from user where  limit $limit,$num");
        $posts = $command->queryAll();
        return $this->renderPartial('landlord_list.html',array('posts'=>$posts,'str'=>$str));*/
    }
    //删除房东信息
    public function actionDel(){
        $l_id=$_GET['l_id'];
        $sql="delete from landlord where l_id='$l_id'";
        $res = \Yii::$app->db->createCommand($sql)->execute();
    }

}
