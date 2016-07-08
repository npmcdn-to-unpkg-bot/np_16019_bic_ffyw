<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 7/1/16 10:12 PM
 */

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use backend\assets\FontsAsset;
use backend\assets\BootstrapPluginAsset;
use yii\helpers\Html;
use common\widgets\Alert;

LoginAsset::register($this);
FontsAsset::register($this);
BootstrapPluginAsset::register($this);

$this->beginPage() ?><!DOCTYPE html>
    <!--[if IE 8]>
    <html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]>
    <html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="<?= Yii::$app->language ?>">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <body class=" login">
    <?php $this->beginBody() ?>

    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.html">
            <img src="<?= Yii::$app->urlManager->baseUrl ?>/assets-enpii/pages/img/logo-big.png" alt=""/> </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="index.html" method="post">
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username"
                           name="username"/></div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                           placeholder="Password"
                           name="password"/></div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"/> Remember me </label>
                <button type="submit" class="btn green pull-right"> Login</button>
            </div>
            <div class="login-options">
                <h4>Or login with</h4>
                <ul class="social-icons">
                    <li>
                        <a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
                    </li>
                    <li>
                        <a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
                    </li>
                    <li>
                        <a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
                    </li>
                    <li>
                        <a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
                    </li>
                </ul>
            </div>
            <div class="forget-password">
                <h4>Forgot your password ?</h4>
                <p> no worries, click
                    <a href="javascript:;" id="forget-password"> here </a> to reset your password. </p>
            </div>
            <div class="create-account">
                <p> Don't have an account yet ?&nbsp;
                    <a href="javascript:;" id="register-btn"> Create an account </a>
                </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="index.html" method="post">
            <h3>Forget Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            <div class="form-group">
                <div class="input-icon">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email"
                           name="email"/></div>
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn red btn-outline">Back</button>
                <button type="submit" class="btn green pull-right"> Submit</button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->
        <form class="register-form" action="index.html" method="post">
            <h3>Sign Up</h3>
            <p> Enter your personal details below: </p>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                <div class="input-icon">
                    <i class="fa fa-font"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname"/>
                </div>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <div class="input-icon">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/></div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Address</label>
                <div class="input-icon">
                    <i class="fa fa-check"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">City/Town</label>
                <div class="input-icon">
                    <i class="fa fa-location-arrow"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city"/>
                </div>
            </div>
            <p> Enter your account details below: </p>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username"
                           name="username"/></div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                           id="register_password"
                           placeholder="Password" name="password"/></div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                <div class="controls">
                    <div class="input-icon">
                        <i class="fa fa-check"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                               placeholder="Re-type Your Password" name="rpassword"/></div>
                </div>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="tnc"/> I agree to the
                    <a href="javascript:;"> Terms of Service </a> and
                    <a href="javascript:;"> Privacy Policy </a>
                </label>
                <div id="register_tnc_error"></div>
            </div>
            <div class="form-actions">
                <button id="register-back-btn" type="button" class="btn red btn-outline"> Back</button>
                <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up</button>
            </div>
        </form>
        <!-- END REGISTRATION FORM -->
    </div>
    <!-- END LOGIN -->

    <!-- BEGIN COPYRIGHT -->
    <div class="copyright"> 2014 &copy; Metronic - Admin Dashboard Template.</div>
    <!-- END COPYRIGHT -->

    <!--[if lt IE 9]>
    <script src="../assets/global/plugins/respond.min.js"></script>
    <script src="../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>