<?php

namespace backend\controllers;
use Yii;
use yii\data\Pagination;
use backend\models\message;
class MessageController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public function actionList()
    {
        //查询数据库
        $query = Message::find();
        //设置每页显示条数
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize'   => 2,
        ]);
        //限制记录条数
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)->asArray()->all();
        //var_dump($models);die;
        foreach($models as $k=>$v) {
            $sql = "select * from user where u_id=".$v['u_id'];
            $db = Yii::$app->db;
            $aa = $db->createCommand($sql)->queryAll();
            foreach ($aa as $kk => $vv)
            {
                $models[$k]['u_name']=$aa[$kk]['u_name'];
            }
        }
        //var_dump($models);die;
        return $this->renderPartial('message_list.html', [
            'res' => $models,
            'pages' => $pages,
        ]);
    }
}
