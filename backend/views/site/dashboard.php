<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use backend\models\ContestSession;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'][] = $this->title;

$contestSessions = ContestSession::find()->all();
$winner = ContestSession::find()->where(['is_winner' => 1])->all();


$client = new Google_Client();


//$client->setApplicationName("Client_Library_Examples");
//$client->setDeveloperKey("YOUR_APP_KEY");
//
//$service = new Google_Service_Books($client);
//$optParams = array('filter' => 'free-ebooks');
//$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);
//
//foreach ($results as $item) {
//    echo $item['volumeInfo']['title'], "<br /> \n";
//}
?>
<div class="user-index">
    <div class="page-bar">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}<i class='fa fa-circle'></i></li>\n",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => [
                'class' => 'page-breadcrumb'
            ]
        ]) ?>
    </div>
    <h3 class="page-title">
        <?= Html::encode($this->title) ?>
    </h3>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-user"></i>
                </div>
                <div class="details">
                    <div class="number"><?= count($contestSessions)?></div>
                    <div class="desc"> Total Submission </div>
                </div>
                <a class="more" href="<?= Yii::$app->urlManager->createUrl(['contest-session'])?>" target="_blank"> View more
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="fa fa-user"></i>
                </div>
                <div class="details">
                    <div class="number"><?= count($winner)?></div>
                    <div class="desc"> Winner </div>
                </div>
                <div class="more"> &nbsp;
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- Begin: life time stats -->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-blue"></i>
                        <span class="caption-subject font-blue bold uppercase">Google Analytics</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#overview_1" data-toggle="tab">Status </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="overview_1">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">

                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="javascript:;"> Apple iPhone 4s - 16GB - Black </a>
                                            </td>
                                            <td> $625.50 </td>
                                            <td> 809 </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-sm btn-default">
                                                    <i class="fa fa-search"></i> View </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:;"> Samsung Galaxy S III SGH-I747 - 16GB </a>
                                            </td>
                                            <td> $915.50 </td>
                                            <td> 6709 </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-sm btn-default">
                                                    <i class="fa fa-search"></i> View </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:;"> Motorola Droid 4 XT894 - 16GB - Black </a>
                                            </td>
                                            <td> $878.50 </td>
                                            <td> 784 </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-sm btn-default">
                                                    <i class="fa fa-search"></i> View </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:;"> Samsung Galaxy Note 4 </a>
                                            </td>
                                            <td> $925.50 </td>
                                            <td> 21245 </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-sm btn-default">
                                                    <i class="fa fa-search"></i> View </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:;"> Regatta Luca 3 in 1 Jacket </a>
                                            </td>
                                            <td> $25.50 </td>
                                            <td> 1245 </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-sm btn-default">
                                                    <i class="fa fa-search"></i> View </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:;"> Samsung Galaxy Note 3 </a>
                                            </td>
                                            <td> $925.50 </td>
                                            <td> 21245 </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-sm btn-default">
                                                    <i class="fa fa-search"></i> View </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: life time stats -->
        </div>
    </div>
</div>
