<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:34 AM
 */
namespace frontend\controllers;

use common\enpii\components\NpController;
use yii;
class FrontendController extends NpController
{
    public function init()
    {
        if(Yii::$app->request->get('locale') == 'fr') {
            Yii::$app->language = 'fr_FR';
        }
        parent::init(); // TODO: Change the autogenerated stub
    }
}