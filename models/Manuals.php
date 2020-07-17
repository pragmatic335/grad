<?php


namespace app\models;


use yii\db\ActiveRecord;

class Manuals extends ActiveRecord
{
    /* достаем все существующие руководства и возвращаем как массив, ориентированные под виджет Nav */
    static public function getLabels() {

        $manuals = Manuals::find()->all();
        $i = 0;

        $array = ['label'=>'Руководства',
            'items'=> [

            ],
        ];

        foreach($manuals as $manual) {
            $array['items'][$i]['label'] = $manual->getAttribute('name');
            $array['items'][$i]['url'] = '/site/manuals';
            $i++;
        }
        return($array);
    }
    /* -------------------------------------------------------------------------------------------- */

}