<?php

namespace backend\controllers;
use Yii;
use yii\data\Pagination;
use backend\models\user;
class UserController extends \yii\web\Controller
{
    public function actionList()
    {
        //查询数据库
        $query = User::find();
        //设置每页显示条数
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize'   => 2,
        ]);
        //限制记录条数
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)->asArray()->all();
        return $this->renderPartial('user_list.html', [
            'res' => $models,
            'pages' => $pages,
        ]);
    }
}
