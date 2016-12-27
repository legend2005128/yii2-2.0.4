<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2016/12/27
 * Time: 13:59
 */
namespace app\controllers;
use yii\web\controller;

class IndexController extends Controller
{
    public function actionIndex(){

        return $this->render('test');
    }
}

