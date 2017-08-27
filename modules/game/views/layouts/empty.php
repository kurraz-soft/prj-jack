<?php

/**
 * @var $this \yii\web\View
 * @var $content string
 */

use yii\helpers\Html;
use yii\helpers\Url;

\app\assets\AppAsset::register($this);
$asset = \app\modules\game\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div style="width: 100%; height: 100%; position: absolute; top: 0; background:rgba(0,0,0,0.5); z-index: 1000" id="loading-wrapper">
    <div style="margin: 0 auto; color: white; width: 100px; line-height: 200px; font-size: 48px; font-family: Victoriana">Loading...</div>
</div>

<!-- Navigation -->
<?= $this->renderFile('@app/views/layouts/_leftmenu.php') ?>

<div class="container-fluid game-wrap">
    <?php \yii\widgets\Pjax::begin() ?>
    <div class="row" style="height: 100vh; background: #e0d2af; min-height: 900px">
        <div class="col-md-10" style="height: 100%">
            <div class="row">
            </div>
            <div class="layout-border-v row"></div>
            <div class="row" style="height: calc(100% - 45px - 18px);">
                <div class="col-lg-12" style="padding: 0; position: relative; height: 100%">
                    <?= $content ?>
                </div>
            </div>
        </div>
        <div class="layout-border-h" style="height: 100%; float: left"></div>
        <div class="col-md-2 text-center" style="margin-left: -18px">
        </div>
    </div>
    <?php \yii\widgets\Pjax::end() ?>
</div>
<!-- /.container -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
