<?php
use yii\bootstrap4\Nav;
use yii\helpers\Html;



    echo Nav::widget([
        'options' => ['class' => 'alert alert-ligh'],
        'items' => [
            ['label' => 'Tree', 'url' => ['/base/index'],
             'items' => [
                'label' => 'qwerty',
                 'items' => ['label' => 'yqwery']
             ],
            ],





        ],
    ]);


