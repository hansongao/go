<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class MenuController extends Controller
{
    public function behaviors()
    {
				return [];
    }
    public function actionUser()
    {
        return $this->render('userview',['message'=>'ok']);
    }	
}
?>