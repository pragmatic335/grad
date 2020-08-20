<?php


namespace app\widgets\treewidget;


use yii\base\Widget;

class Tree extends Widget
{
    public $message = 'Empty :(';

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        parent::run();
        $output = ob_get_clean();

        return $this->render('view', ['message' => $this->message] );
    }
}