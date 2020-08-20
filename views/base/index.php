<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

for($i=0;$i<0;$i++) {
    echo 'ПРОСсто для примера что и как тут будет высвечиваться dfas dfa dsf sad sfsad ddfad ads fsa dsf sad ddfad adsfs ads fsad ddf ad ad sfs adsfsad ddfad ads fsads fsad ddfad ads fsad sfsad ddfad adsfsad';
    echo "<br>";
}

if(Yii::$app->user->isGuest) {
    echo 'Hello guest';
}
else {
    echo 'Hello User';
}






