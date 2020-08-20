<?php
  namespace app\components\behaviors;

use app\assets\AppAsset;
use Yii;
use yii\base\Behavior;
use yii\base\Controller;

class WelcomBehavor extends Behavior
{
    public function events() {
        return [
          Controller::EVENT_BEFORE_ACTION => 'beforeAction',
        ];
    }

    public function beforeAction() {

        if(Yii::$app->user->isGuest)
            Yii::$app->params['accessUser'] = 1;
        else
            Yii::$app->params['accessUser'] = 0;

    }
}