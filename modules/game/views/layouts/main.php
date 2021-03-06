<?php

/**
 * @var $this \yii\web\View
 * @var $content string
 */

use yii\helpers\Html;
use yii\helpers\Url;

\edgardmessias\assets\nprogress\NProgressAsset::register($this);
\app\assets\AppAsset::register($this);
$asset = \app\modules\game\assets\AppAsset::register($this);
$character = \app\modules\game\models\GameMechanics::getInstance()->gameRegister->character;
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
    <?php \app\modules\game\widgets\FixedPjax\FixedPjax::begin() ?>
    <div class="row" style="height: 100vh; background: #e0d2af; min-height: 900px">
        <div class="col-md-10" style="height: 100%">
            <div class="row">
                <?= \app\modules\game\widgets\StatPanel\StatPanel::widget() ?>
            </div>
            <div class="layout-border-h row"></div>
            <div class="row" style="height: calc(100% - 45px - 18px);">
                <div class="col-lg-12" style="padding: 0; position: relative; height: 100%">
                    <?php if($this->context->is_outside): ?>
                    <div class="game-move-quick-panel">
                        <div style="font-weight: bold">Идти</div>
                        <div><a href="<?= Url::to(['white-city/index']) ?>" title="Белый город">W</a></div>
                        <div><a href="<?= Url::to(['bull-quoter/index']) ?>" title="Бычий квартал">B</a></div>
                        <div><a href="<?= Url::to(['snake-quoter/index']) ?>" title="Квартал змеи">S</a></div>
                        <div><a href="<?= Url::to(['outcast-quoter/index']) ?>" title="Квартал отверженных">O</a></div>
                        <div><a href="<?= Url::to(['necropolis/index']) ?>" title="Некрополис">N</a></div>
                        <div><a href="<?= Url::to(['fog-border/index']) ?>" title="Граница туманов">F</a></div>
                    </div>
                    <?php if($this->context->getRoute() == 'game/home/index'): ?>
                    <a class="game-home-btn" href="<?= Url::to($character->home->location_route) ?>" title="Выйти из дома"></a>
                    <?php else: ?>
                    <a class="game-home-btn" href="<?= Url::to(['home/index']) ?>" title="Домой"></a>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?= $content ?>
                </div>
            </div>
        </div>
        <div class="layout-border-v"></div>
        <div class="col-md-2 text-center" style="margin-left: -18px">
            <?= \app\modules\game\widgets\CharacterInfo\CharacterInfo::widget([
                'buttons_enabled' => $this->context->character_panel_active,
            ]) ?>
            <?= \app\modules\game\widgets\ApprenticeInfo\ApprenticeInfo::widget([
                'buttons_enabled' => $this->context->character_panel_active,
            ]) ?>
            <?= \app\modules\game\widgets\AssistantInfo\AssistantInfo::widget([
                'buttons_enabled' => $this->context->character_panel_active,
            ]) ?>
            <div class="col-md-12">
                <div class="game-slave-param-row">
                    <div>Легкий беспорядок</div>
                    <a href="#" class="game-green-btn" title="Убрать">&nbsp;</a>
                </div>
                <div class="game-slave-param-row">
                    <div>Еда не готова</div>
                    <a href="#" class="game-green-btn" title="Приготовить еду">&nbsp;</a>
                </div>
            </div>
        </div>
    </div>
    <?php \app\modules\game\widgets\FixedPjax\FixedPjax::end() ?>
</div>
<!-- /.container -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
