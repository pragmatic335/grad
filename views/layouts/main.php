<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\models\Manuals;
use app\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Collapse;
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
<html lang="<?= Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--    <script>  --><?//= $this->render('scripts.js'); ?><!-- </script>-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap ">


    <?= /* Header нашего приложения */
        $this->render('_header');
    ?>
    <div class="mainer mt-1 ">
        <?= /* Sidebar нашего приложения */
            $this->render('_sidebar');
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>

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
