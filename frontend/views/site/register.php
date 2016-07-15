<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\RegisterForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;
use frontend\models\ContestItem;
use kartik\file\FileInput;
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="container">
        <div class="registration-content">
            <div class="registration-content-row">
                <div class="col-md-3 image-heading">

                    <img src="<?= Yii::$app->urlManager->baseUrl . '/themes/default/images/weekly-challenge.png' ?>"
                         alt="Weekly Challenge" width="266" height="220">

                </div>
                <div class="col-md-9 intro-heading">
                    <div class="intro-heading-inner">
                        <h1 class="head-line">
                            <span class="font-2 color-2 head-line-1">This week's</span>
                            <span class="font-5 color-3 head-line-2">hand Writing</span>
                            <span class="font-2 color-2 head-line-3">challenge!</span>
                        </h1>
                        <div class="intro">
                            <div class="intro-inner">
                                <h3>
                                    <span class="font-5 color-1"><?= Yii::t('app','Week') . ' ' . ContestItem::getWeek()->id ?>: <?= ContestItem::getWeek()->title?></span>
                                </h3>
                                <?= ContestItem::getWeek()->description?>
                                <div class="global-btn">
                                    <a class="global-btn-inner" href="">GALLERY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="register-form">
                <h3 class="form-title font-5 font-size-25">Please fill out the form below to submit your entry:</h3>
                <p class="require-hint">* Required Fields</p>
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data',
                        'id' => 'register-form'
                    ]
                ]); ?>
                <div class="form-row">
                    <?= $form->field($model, 'parentFirstName')->textInput(['placeholder' => Yii::t('app', '*' . 'Parents First Name')])->label(false) ?>
                    <?= $form->field($model, 'parentLastName')->textInput(['placeholder' => Yii::t('app', '*' . 'Parents Last Name')])->label(false) ?>
                    <?= $form->field($model, 'phoneNumber')->textInput(['placeholder' => Yii::t('app', '*' . 'Phone Number')])->label(false) ?>
                </div>

                <div class="form-row">
                    <?= $form->field($model, 'province')->dropDownList(
                        [
                            'Alberta' => 'Alberta',
                            'British Columbia' => 'British Columbia',
                            'Manitoba' => 'Manitoba',
                            'New Brunswick' => 'New Brunswick',
                            'Newfoundland and Labrador' => 'Newfoundland and Labrador',
                            'Northwest Territories' => 'Northwest Territories',
                            'Nova Scotia' => 'Nova Scotia',
                            'Nunavut' => 'Nunavut',
                            'Ontario' => 'Ontario',
                            'Prince Edward Island' => 'Prince Edward Island',
                            'Quebec' => 'Quebec',
                            'Saskatchewan' => 'Saskatchewan',
                            'Yukon Territory' => 'Yukon Territory',
                        ],
                        [
                            'prompt' => '*' . Yii::t('app', 'Province'),
                            'class' => 'form-control select2 hide-arrow'
                        ]
                    )->label(false) ?>
                    <div class="form-date-time required">
                        <div class="form-date-time-inner">
                            <label class="control-label"><?= Yii::t('app', 'Date of Birth') ?>:</label>
                            <?= $form->field($model, 'birthMonth', ['options' => ['class' => 'date-time-item']])
                                ->dropDownList([
                                    array_combine(range(1,12), range(1,12))
                                ],[
                                    'prompt' => Yii::t('app', 'Month'),
                                    'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                                ])
                                ->label(false) ?>
                            <?= $form->field($model, 'birthDate', ['options' => ['class' => 'date-time-item']])
                                ->dropDownList([
                                    array_combine(range(1,31), range(1,31))
                                ],[
                                    'prompt' => Yii::t('app', 'Day'),
                                    'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                                ])
                                ->label(false) ?>
                            <?= $form->field($model, 'birthYear', ['options' => ['class' => 'date-time-item']]) ->dropDownList([
                                array_combine(range(1905,1998), range(1905,1998))
                            ],[
                                'prompt' => Yii::t('app', 'Year'),
                                'class' => 'a-center small-input date-picker select2 hide-no-value hide-arrow'
                            ])
                                ->label(false) ?>
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <?= $form->field($model, 'email')->textInput(['placeholder' => '*Email Address','value' =>  Yii::$app->session->get('userEmail')])->label(false) ?>
                    <?= $form->field($model, 'emailConfirm')->textInput(['placeholder' => '*Confirm Email'])->label(false) ?>

                </div>
                <div class="form-row">
                    <?= $form->field($model, 'agreeTerm', ['options' => ['class' => 'form-check-box']])->checkbox(
                        ['template' => '<div class="form-check-box-inner">{input}{label}</div>{error}']
                    )->label(Yii::t('app', 'I have read and agree to the ') . Html::a(Yii::t('app', 'official rules'), '#')) ?>

                </div>
                <div class="form-row">
                    <?= $form->field($model, 'childFirstName')->textInput(['placeholder' => Yii::t('app', '*' . 'Child’s First Name')])->label(false) ?>
                    <?= $form->field($model, 'childLastInitial')->textInput(['placeholder' => Yii::t('app', '*' . 'Child’s Last Initial')])->label(false) ?>
                    <?= $form->field($model, 'age')->textInput(['class' => 'small-input', 'placeholder' => Yii::t('app', 'Age')])->label(false) ?>
                </div>
                <div class="form-row">
                    <?php
                    $layoutTemplate = [
                        'main2' => '<div class="kv-upload-progress hide"></div>{browse}{preview}{remove}',
                        'footer' => ''
                    ]
                    ?>
                    <?= $form->field($model, 'uploadFile',[
                        'options' => ['class' => 'form-upload'],
                        'template' => '<div class="form-upload-inner">' .
                            '<div class="input-instruction">' .
                            Yii::t('app', 'Upload photo instructions') . ':<br/>' .
                            Yii::t('app', 'No larger than 5MB and only accept .jpg and .png files') .
                            '</div>' .
                            '{label}{input}{error}</div>'
                    ])->widget(FileInput::className(), [
                        'options' => [
                            'multiple' => false,
                            'accept' => 'image/*',
                            'class' => 'optionvalue-img'
                        ],
                        'pluginOptions' => [
                            'previewFileType' => 'image',
                            'showCaption' => false,
                            'showUpload' => false,
                            'browseClass' => 'btn btn-default global-btn btn-sm',
                            'browseLabel' => Yii::t('app','UPLOAD'),
                            'browseIcon' => '',
                            'removeClass' => 'global-btn',
                            'removeLabel' => '',
                            'removeIcon' => '<i class="fa fa-trash"></i>',
                            'previewSettings' => [
                                'image' => ['width' => 'auto', 'height' => 'auto']
                            ],
                            'initialPreview' => '',
                            'layoutTemplates' => $layoutTemplate
                        ]
                    ])->label(false) ?>

                </div>

                <div class="form-row">
                    <?= $form->field($model, 'verificationCode', [
                        'options' => ['class' => 'form-recaptcha'],
                    ])->widget(
                        ReCaptcha::className(),
                        [
                            'siteKey' => '6LddpCQTAAAAADkMcb59wigYVIq7n1Y9jKE4HCS3',
                            'options' => [
                                'class' => 'global-input'
                            ],
                        ])->label(false) ?>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="global-btn btn-submit">
                            <?= Html::submitButton('SUBMIT', ['class' => 'global-btn-inner', 'name' => 'signup-button']) ?>
                        </div>

                    </div>
                </div>


                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="home-text-block">
            <div class="show-on-desktop">
                <b>NO PURCHASE NECESSARY TO ENTER OR WIN.</b> Void where prohibited. The
                Contest is strictly open to individuals who are legal residents of Canada, who are over the age of
                majority in their province or territory of residence and a parent and/or legal guardian of a child
                between the age of 6 and 18 at the time of entry (“Eligible Child”). The Eligible Child cannot by any
                means enter The Contest. The Contest will begin 8/02/16 at 12:00:01 PM Eastern Time (“ET”) and ends
                9/12/16 at 11:59:59 PM ET ("Contest Submission Period").  Winners must correctly answer a mathematical
                skill testing question to win a prize. Contest Winners will be determined solely by random draw. Odds of
                winning a random drawing depends upon the number of eligible entries received. One (1) Contest
                Submission per person, per week for each Eligible Child (up to a maximum of four (4) Eligible Children
                per person) during the entire Contest Submission Period. Weekly winners are selected at end of
                respective weekly period. Grand prize winner to be selected upon full completion of the Contest. You may
                only use one (1) email address to participate in this Contest. See Official Rules for details. Sponsor:
                BIC Inc.
            </div>
            <div class="show-on-mobile">
                 No Purch Nec., CAD only, Age of Majority in Prov./Territ. Of Res. Ends 09/12/2016. <a href="#">Click
                    Here for Official Rules.</a>
            </div>

        </div>
    </div>
</div>