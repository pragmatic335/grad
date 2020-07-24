<?php


namespace app\controllers;


use yii\web\Controller;

class KassaController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}