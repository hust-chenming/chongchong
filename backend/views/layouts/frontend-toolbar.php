<?php
use yii\helpers\Html;
use yii\helpers\Url;
use backend\assets\FrontendAsset;
use backend\models\Setting;

$asset = FrontendAsset::register($this);
$position = Setting::get('toolbar_position') === 'bottom' ? 'bottom' : 'top';
$this->registerCss('body {padding-'.$position.': 50px;}');
?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<nav id="easyii-navbar" class="navbar navbar-inverse navbar-fixed-<?= $position ?>">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="<?= Url::to(['/admin']) ?>"><span class="glyphicon glyphicon-arrow-left"></span> <?= Yii::t('backend', 'Control Panel') ?></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= Url::to(['/admin/sign/out']) ?>"><span class="glyphicon glyphicon-log-out"></span> <?= Yii::t('backend', 'Logout') ?></a></li>
        </ul>
    </div>
</nav>