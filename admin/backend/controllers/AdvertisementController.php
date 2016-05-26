<?php

namespace backend\controllers;
use backend\models\Advert;
use yii\web\UploadedFile;
use Yii;
use yii\data\Pagination;
class AdvertisementController extends \yii\web\Controller
{
	public $enableCsrfValidation=false;
	//显示广告添加
	public function actionAdd()
	{
		$this->layout = false;
		$model=new Advert();
		return $this->render('advertisement',["model"=>$model]);
	}
	//添加广告
	public function actionApp(){
		//实例化input
			$posts=\Yii::$app->request->post();
			//var_dump($posts);die;
			//$aa=$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
			//$filename=$aa->name;
			//实例化数据库
			$db = \Yii::$app->db->createCommand();
			$model = new Advert();
			//判断上传
			if (Yii::$app->request->isPost) {
				$model->a_img = UploadedFile::getInstance($model, 'a_img');
				if ($model->upload()) {
					// 文件上传成功
				 $a_img=$model->a_img;
					$db->insert('advert' , ['a_title'=>$posts['a_title'],'a_img'=>$a_img,'a_show'=>$posts['a_show'],'a_order'=>$posts['a_order'] ] )->execute();
				//var_dump($db);die;
				if($db){
				$this->layout = false;
				echo "<script>alert('添加成功	');location.href='index.php?r=advertisement/list'</script>";	
			}else{
				echo "<script>alert('添加失败');location.href='index.php?r=advertisement/add'</script>";
			}	
				}
			}
			
		}
		//列表显示
		public function actionList()	
		{
			
        //查询数据库
		$query = Advert::find();
			$pages = new Pagination([
				'totalCount' => $query->count(),
				'pageSize'   => 2,
			]);
			$models = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
			//var_dump($models);die;
			//$u_id=$models[0]['u_id'];
			//echo $u_id;die;
			return $this->renderPartial('advertisement_list.html', [
				'arr' => $models,
				'pages' => $pages,
			]);
			/*//查询数据条数
			$connection = \Yii::$app->db;
			//进行查询
			$command = $connection->createCommand("select count(*) as count from advert ");
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
			//拼写分页
			$str="<a href='index.php?r=advertisement/list&page=1'><input type='button' value='首页' class='ui_input_btn01'/></a>";
			$str.="<a href='index.php?r=advertisement/list&page=$uppage'><input type='button' value='上一页' class='ui_input_btn01'/></a>";
			$str.="<a href='index.php?r=advertisement/list&page=$downpage'><input type='button' value='下一页' class='ui_input_btn01'/></a>";
			$str.="<a href='index.php?r=advertisement/list&page=$pagecount'><input type='button' value='尾页' class='ui_input_btn01'/></a>";
			//进行查询
			$command = $connection->createCommand("select * from advert limit $limit,$num");
			$posts = $command->queryAll();
			//跳转
			return $this->renderPartial('advertisement_list.html',['arr'=>$posts,'str'=>$str]);*/

		}
		//删除广告
		public function actionSc(){	
			//获取到要删除的id
			$id=$_GET['id'];
			//进行删除
			$connection = \Yii::$app->db;
			$connection->createCommand()->delete('advert',"a_id='$id'")->execute();
		
		}


}
