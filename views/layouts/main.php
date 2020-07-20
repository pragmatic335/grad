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
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-dark bg-primary',
        ],

    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right nav justify-content-end'],
        'items' => [
            ['label' => 'На главную',
                'items' => [
                        'label' => 'На фронт',
                        'items'  => [
                                'label' => 'На передовую',
                                'url' => ['/site/manual'],
                        ],
                ],
            ],
             Manuals::getLabels(),

//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
        ],
    ]);
    ?>

    <?php
    NavBar::end();
    ?>

<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= Alert::widget() ?>
<!--        --><?//= $content ?>
<!--    </div>-->
    <div class="container">
    <nav id="navbar-example3" class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <nav class="nav nav-pills flex-column">
            <a class="nav-link" href="#item-1">Item 1</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link ml-3 my-1" href="#item-1-1">Item 1-1</a>
                <a class="nav-link ml-3 my-1" href="#item-1-2">Item 1-2</a>
            </nav>
            <a class="nav-link" href="#item-2">Item 2</a>
            <a class="nav-link" href="#item-3">Item 3</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link ml-3 my-1" href="#item-3-1">Item 3-1</a>
                <a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>
            </nav>
        </nav>
    </nav>

    <div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
        <h4 id="item-1">Item 1</h4>
        <p></p>
        <h5 id="item-1-1">Item 1-1</h5>
        <p>...</p>
        <h5 id="item-1-2">Item 1-2</h5>
        <p>...</p>
        <h4 id="item-2">Item 2</h4>
        <p>...</p>
        <h4 id="item-3">Item 3</h4>
        <p>...</p>
        <h5 id="item-3-1">Item 3-1</h5>
        <p>...</p>
        <h5 id="item-3-2">Item 3-2</h5>
        <p>...</p>
    </div>
</div>
</div>

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
