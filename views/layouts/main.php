<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php //$this->beginPage() ?>
<!--<!DOCTYPE html>-->
<!--<html lang="--><?//= Yii::$app->language ?><!--" class="h-100">-->
<!--<head>-->
<!--    <meta charset="--><?//= Yii::$app->charset ?><!--">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--    --><?php //$this->registerCsrfMetaTags() ?>
<!--    <title>--><?//= Html::encode($this->title) ?><!--</title>-->
<!--    --><?php //$this->head() ?>
<!--</head>-->
<!--<body class="d-flex flex-column h-100">-->
<?php //$this->beginBody() ?>
<!---->
<!--<header>-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/index']],
//            ['label' => 'About', 'url' => ['/about']],
//            ['label' => 'About', 'url' => ['/menu']],
//            ['label' => 'Contact', 'url' => ['/contact']],
//
//
////            Yii::$app->user->isGuest ? (
////                ['label' => 'Login', 'url' => ['/login']]
////            ) : (
////                '<li>'
////                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
////                . Html::submitButton(
////                    'Logout (' . Yii::$app->user->identity->username . ')',
////                    ['class' => 'btn btn-link logout']
////                )
////                . Html::endForm()
////                . '</li>'
////            )
//        ],
//    ]);
//    NavBar::end();
//    ?>
<!--</header>-->
<!---->
<!--<main role="main" class="flex-shrink-0">-->
<!--    <div class="container">-->
<!--        --><?//= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><?//= Alert::widget() ?>
<!--        --><?//= $content ?>
<!--    </div>-->
<!--</main>-->

<!--<footer class="footer mt-auto py-3 text-muted">-->
<!--    <div class="container">-->
<!--        <p class="float-left">&copy; My Company --><?//= date('Y') ?><!--</p>-->
<!--        <p class="float-right">--><?//= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->
<!---->
<?php //$this->endBody() ?>
<!--</body>-->
<!--</html>-->
<?php //$this->endPage() ?>



<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <h1>
                <a class="navbar-brand" href="/index.php?r=site/index">
                    <i class="fa fa-cutlery" aria-hidden="true"></i> Foodies
                </a>
            </h1>
            <!-- if logo is image enable this
                <a class="navbar-brand" href="#index.html">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/index.php?r=site/index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php?r=site/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php?r=site/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php?r=site/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- search button -->
            <div class="search-right">
                <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                <!-- search popup -->
                <div id="search" class="pop-overlay">
                    <div class="popup">
                        <h4 class="search-pop-text-w3 text-white text-center mb-4">Search Here Your Favourite Food
                        </h4>
                        <form action="#search" method="GET" class="search-box">
                            <div class="input-search"> <span class="fa fa-search mr-2"
                                                             aria-hidden="true"></span><input type="search" placeholder="Enter Keyword"
                                                                                              name="search" required="required" autofocus="">
                            </div>
                            <button type="submit" class="btn button-style">Search</button>
                        </form>
                    </div>
                    <a class="close" href="#close">×</a>
                </div>
                <!-- //search popup -->
            </div>
            <!-- //search button -->
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!--header-->


<main role="main" class="flex-shrink-0">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>



<!-- footer -->
<section class="w3l-footer-16">
    <div class="w3l-footer-16-main">
        <div class="container">
            <div class="row footer-p">
                <div class="col-lg-4 pr-lg-5">
                    <a class="logo" href="index.html"><i class="fa fa-cutlery" aria-hidden="true"></i> Foodies</a>
                    <p class="mt-4">Duis imperdiet sapien tortor, vitae congue diam auctor vitae. Aliquam
                        eget turpis ornare, euismod ligul aeget, enenatis dui. </p>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <h3>Pages</h3>
                    <div class="row">
                        <div class="col-6 column">
                            <ul class="footer-gd-16">
                                <li><a href="index.html"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i>Home</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About
                                        Us</a></li>
                                <li><a href="#services"><i class="fa fa-angle-right"
                                                           aria-hidden="true"></i>Services</a></li>
                                <li><a href="#blog"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog
                                        Posts</a></li>
                                <li><a href="contact.html"><i class="fa fa-angle-right"
                                                              aria-hidden="true"></i>Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-6 column pl-0">
                            <ul class="footer-gd-16">
                                <li><a href="menu.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Foodies
                                        Menu</a></li>
                                <li><a href="#privacy"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy
                                        Policy</a></li>
                                <li><a href="#terms"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms and
                                        conditions</a></li>
                                <li><a href="#faq"><i class="fa fa-angle-right" aria-hidden="true"></i>FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 column mt-lg-0 mt-4">
                    <h3>Newsletter </h3>
                    <div class="end-column">
                        <h3>Subscribe Here Now</h3>
                        <form action="#" class="subscribe" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
                <div class="columns text-lg-left">
                    <p class="copy-text">@ 2020 Foodies. All rights reserved. Design by <a
                                href="https://w3layouts.com/" target="_blank">
                            W3Layouts</a>
                    </p>
                </div>
                <div class="columns-2 mt-md-0 mt-3">
                    <ul class="social">
                        <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //footer -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-level-up" aria-hidden="true"></span>
</button>
<!-- //move top -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
