<?php

//use yii\bootstrap4\Nav;
//use yii\bootstrap4\NavBar;
//$a = <<<HTML
//    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:#3D3D3D">
//  <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
//</svg>
//HTML;
//
//
//
//NavBar::begin([
//    'brandLabel' => $a . Yii::$app->name,
//
//    'brandUrl' => Yii::$app->homeUrl,
//    'options' => [
//        'class' => 'navbar navbar-light bg-light navbar-expand-lg rounded-0 shadow-sm',
//    ],
//]);
//?>
<!---->
<?php
//echo Nav::widget([
//    'options' => ['class' => 'navbar-nav ml-auto'],
//    'items' => [
//        ['label' => 'Главная', 'url' => ['/site/index']],
//        ['label' => 'Специалисты', 'url' => ['/site/about']],
//        ['label' => 'Задать вопрос', 'url' =>['/post/index']],
//        ['label' => 'Оставить анкету', 'url' => ['/site/contact']],
//
//
//    ],
//]);
//NavBar::end();


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <div>
        <svg width="1.5em" id="toggler" height="1.5em" viewBox="0 0 16 16" class="bi bi-list mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:#3D3D3D;">
              <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
        <a class="navbar-brand ml-3" href="#">Личный прием</a>
        </div>

        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Специалисты</a>
            <a class="nav-item nav-link" href="#">Форма обращения</a>
            <a class="nav-item nav-link" href="#">Контакты</a>
        </div>
    </div>
</nav>
