<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\models\Manuals;
use app\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Header;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">

    <nav class="navbar  navbar-dark bg-dark rounded-0 navbar-expand-lg justify-content-end">
        <a class="navbar-brand" href="#">Документация ПК ГРАД</a>
        <nav class="navbar-nav">
            <a class="nav-link active" href="#">Active</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>
    </nav>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

    </div>
</div>
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-dark bg-primary',
//        ],
//
//    ]);?>
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    //'navbar-nav navbar-right nav justify-content-end flex-column-->-->
<!-- --><?php //  echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right nav justify-content-end '],
//        'items' => [
//            ['label' => 'На главную',
//             'url' => ['/site/manual'],
//            ],
//             Manuals::getLabels(),
//
////            Yii::$app->user->isGuest ? (
////                ['label' => 'Login', 'url' => ['/site/login']]
////            ) : (
////                '<li>'
////                . Html::beginForm(['/site/logout'], 'post')
////                . Html::submitButton(
////                    'Logout (' . Yii::$app->user->identity->username . ')',
////                    ['class' => 'btn btn-link logout']
////                )
////                . Html::endForm()
////                . '</li>'
////            )
//        ],
//    ]);
//    ?>
<!--    --><?php //NavBar::end(); ?>





<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; ООО ПРОГМАТИК <?= date('Y') ?></p>

<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
