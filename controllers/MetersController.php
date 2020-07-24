<?php


namespace app\controllers;


use yii\web\Controller;

class MetersController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}