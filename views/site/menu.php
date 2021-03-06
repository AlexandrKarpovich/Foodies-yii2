<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                    Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>




<!-- inner banner -->
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Foodies Menu</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Menu</li>
            </ul>
        </div>
    </section>
</div>
<!-- //inner banner -->
<!-- menu -->
<div class="menu-w3ls py-5" id="menu">
    <div class="container py-md-4 py-3">
        <h3 class="title-big mb-2">Breakfast</h3>
        <div class="row menu-body">
            <!-- Section starts: Breakfast -->
            <div class="col-lg-6 menu-section">
                <!-- Item starts -->
                <div class="row menu-item">
                    <div class="col-3 p-0 position-relative">
                        <img src="/images/menu1.jpg" class="img-responsive" alt="">
                        <a href="#order" class="btn button-style button-style-2">Add</a>
                    </div>
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6>Tomato Toast ???Ricotta???</h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6>$36</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Item ends -->
                <!-- Item starts -->
                <div class="row menu-item">
                    <div class="col-3 p-0 position-relative">
                        <img src="/images/menu2.jpg" class="img-responsive" alt="">
                        <a href="#order" class="btn button-style button-style-2">Add</a>
                    </div>
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6>Avocado Toast with Egg</h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6>$28</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Item ends -->
                <!-- Item starts -->
                <div class="row menu-item">
                    <div class="col-3 p-0 position-relative">
                        <img src="/images/menu3.jpg" class="img-responsive" alt="">
                        <a href="#order" class="btn button-style button-style-2">Add</a>
                    </div>
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6>Nut, Banana & Seed Toast</h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6>$18</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Item ends -->
                <!-- Item starts -->
                <div class="row menu-item">
                    <div class="col-3 p-0 position-relative">
                        <img src="/images/menu4.jpg" class="img-responsive" alt="">
                        <a href="#order" class="btn button-style button-style-2">Add</a>
                    </div>
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6>Berry & Yogurt Smoothie</h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6>$76</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Item ends -->
            </div>
            <!-- Section ends: Breakfast -->

            <!-- Section starts: Breakfast -->
            <div class="col-lg-6 menu-section pl-lg-5">
                <!-- Item starts -->
                <div class="row menu-item">
                    <div class="col-3 p-0 position-relative">
                        <img src="/images/menu5.jpg" class="img-responsive" alt="">
                        <a href="#order" class="btn button-style button-style-2">Add</a>
                    </div>
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6>Berry Breakfast Parfait</h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6>$13</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Item ends -->
                <!-- Item starts -->
                <div class="row menu-item">
                    <div class="col-3 p-0 position-relative">
                        <img src="/images/menu6.jpg" class="img-responsive" alt="">
                        <a href="#order" class="btn button-style button-style-2">Add</a>
                    </div>
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6>Peanut Butter & Banana</h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6>$32</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Item ends -->
                <!-- Item starts -->
                <div class="row menu-item">
                    <div class="col-3 p-0 position-relative">
                        <img src="/images/menu7.jpg" class="img-responsive" alt="">
                        <a href="#order" class="btn button-style button-style-2">Add</a>
                    </div>
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6>Quinoa Fruit Salad</h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6>$76</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Item ends -->
                <!-- Item starts -->
                <div class="row menu-item">
                    <div class="col-3 p-0 position-relative">
                        <img src="/images/menu8.jpg" class="img-responsive" alt="">
                        <a href="#order" class="btn button-style button-style-2">Add</a>
                    </div>
                    <div class="col-9 pl-4">
                        <div class="row no-gutters">
                            <div class="col-9 menu-item-name">
                                <h6>Pumpkin Yogurt Parfait</h6>
                            </div>
                            <div class="col-3 menu-item-price text-right">
                                <h6>$26</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Item ends -->
            </div>
            <!-- Section ends: Breakfast -->
        </div>

        <div class="another-sec">
            <h3 class="title-big mb-2">Lunch</h3>
            <div class="row menu-body">
                <!-- Section starts: Lunch -->
                <div class="col-lg-6 menu-section pr-lg-5">
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu9.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Grilled Lamb & Feta Pita</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$63</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu10.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>The Ultimate Veggie</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$36</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu11.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Chicken Salad Lunch Box</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$23</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Lunch -->

                <!-- Section starts: Lunch -->
                <div class="col-lg-6 menu-section pl-lg-5">
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu12.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Coriander Chicken and Rice</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$46</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu13.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>The plate of barbeque</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$26</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu14.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Chicken grill with sauce</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$67</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Lunch -->
            </div>
        </div>

        <div class="another-sec">
            <h3 class="title-big mb-2">Dinner</h3>
            <div class="row menu-body">
                <!-- Section starts: Dinner -->
                <div class="col-lg-6 menu-section pr-lg-5">
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu10.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>The Ultimate Veggie</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$52</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu14.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Chicken grill with sauce</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$46</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu7.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Quinoa Fruit Salad</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$56</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Dinner -->

                <!-- Section starts: Dinner -->
                <div class="col-lg-6 menu-section pl-lg-5">
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu2.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Avocado Toast with Egg</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$26</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu1.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Tomato Toast Ricotta</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$26</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="/images/menu9.jpg" class="img-responsive" alt="">
                            <a href="#order" class="btn button-style button-style-2">Add</a>
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6>Grilled Lamb & Feta Pita</h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6>$72</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Dinner -->
            </div>
        </div>
    </div>
</div>
<!-- //menu -->
<!-- promocode section -->
<section class="w3l-promocode">
    <div class="promo-block pt-md-0 pt-4">
        <div class="container">
            <div class="row aap-4-section">
                <div class="col-lg-6 app4-right-image">
                    <img src="/images/img3.png" class="img-responsive" alt="App Device" />
                </div>
                <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-sm-2 mb-4">
                    <h6>For 30% Discount</h6>
                    <h4>Get Our Promocode Now</h4>
                    <p class="mb-4"> Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                        sapien. Proin a
                        diam et dui fermentum molestie vel id neque. </p>
                    <div class="app-4-connection">
                        <div class="newsletter">
                            <label>Never Miss a Deal From Foodies</label>
                            <form action="#" methos="GET" class="d-flex wrap-align">
                                <input type="email" placeholder="Enter your email id" required="required" />
                                <button type="submit">Get Promocode</button>
                            </form>
                        </div>
                        <p class="mobile-text-app mt-4 pt-2">(Or) To Get Our Mobile Apps</p>
                        <div class="app-4-icon">
                            <ul>
                                <li><a href="#url" title="Apple" class="app-icon apple-vv"><span class="fa fa-apple"
                                                                                                 aria-hidden="true"></span></a></li>
                                <li><a href="#url" title="Google play" class="app-icon play-vv"><span
                                            class="fa fa-play" aria-hidden="true"></span></a></li>
                                <li><a href="#url" title="Microsoft" class="app-icon windows-vv"><span
                                            class="fa fa-windows" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //promocode section -->
