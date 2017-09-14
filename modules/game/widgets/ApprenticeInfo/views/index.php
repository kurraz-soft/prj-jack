<?php
/**
 * @var \app\modules\game\models\game_data\Apprentice $apprentice
 */
use yii\helpers\Url;

$asset = new \app\modules\game\assets\AppAsset();
?>
<div class="col-md-12 character-block-item">
    <?php if($apprentice): ?>
    <div class="row">
        <div class="col-md-2" style="display: flex; flex-direction: column">
            <div><a href="#game-text-menu-0-0-0-0" class="game-slave-question-btn game-menu-quick-link" title="Спросить">&nbsp;</a></div>
            <div><a href="#game-text-menu-0-0-0-1" class="game-slave-influence-btn game-menu-quick-link" title="Повлиять">&nbsp;</a></div>
        </div>
        <div class="col-md-8">
            <a href="<?= Url::to(['home/apprentice-screen']) ?>"><img src="<?= $asset->baseUrl . '/img/'.$apprentice->visuals->avatar_clear ?>"></a>
        </div>
        <div class="col-md-2" style="display: flex; flex-direction: column">
            <div title="<?= $apprentice->age->getStatus() ?>" data-toggle="tooltip">
                <img src="<?= $asset->baseUrl . '/img/'.$apprentice->age->getIco() ?>">
            </div>
            <div title="<?= $apprentice->body->vagina->getStatusVirginity() ?>" data-toggle="tooltip">
                <?php if($apprentice->body->vagina->is_virgin): ?>
                    <img src="<?= $asset->baseUrl . '/img/ui/jon-UIadds/info_virgin.png' ?>">
                <?php else: ?>
                    <img src="<?= $asset->baseUrl . '/img/ui/jon-UIadds/info_virginnot.png' ?>">
                <?php endif; ?>
            </div>
            <div title="<?= $apprentice->attributes->fertility->value?'Может забеременеть':'Не может забеременеть' ?>" data-toggle="tooltip">
                <?php if($apprentice->attributes->fertility->value): ?>
                    <img src="<?= $asset->baseUrl . '/img/ui/jon-UIadds/info_fertile.png' ?>">
                <?php else: ?>
                    <img src="<?= $asset->baseUrl . '/img/ui/jon-UIadds/info_fertilenot.png' ?>">
                <?php endif; ?>
            </div>
            <div class="game-slave-info-blank"><?= $apprentice->aura->lust->value ?></div>
            <div><img src="<?= $asset->baseUrl . '/img/ui/jon-UIadds/transparent.png' ?>"></div>
            <div title="<?= $apprentice->body->brand->getStatus() ?>" data-toggle="tooltip">
                <img src="<?= $asset->baseUrl . '/img/'.$apprentice->body->brand->getIco()?>">
            </div>
        </div>
    </div>
    <div class="row">
        <p>Энергия: <?= $apprentice->energy->out() ?></p>
        <p>Дуется</p>
        <div class="game-slave-param-row">
            <div>Отличилась [5]</div>
            <a href="#game-text-menu-0-0-5" class="game-red-btn game-menu-quick-link" title="Наказать">&nbsp;</a>
            <a href="#game-text-menu-0-0-4" class="game-green-btn game-menu-quick-link" title="Наградить">&nbsp;</a>
        </div>
        <div class="game-slave-param-row">
            <div>Чистая</div>
            <a href="#" class="game-green-btn" title="Помыть">&nbsp;</a>
        </div>
    </div>
    <?php else: ?>
        <div class="row">
        <div class="col-md-2" style="display: flex; flex-direction: column">
        </div>
        <div class="col-md-8">
            <img src="<?= $asset->baseUrl . '/img/no_ava.jpg' ?>">
        </div>
        <div class="col-md-2" style="display: flex; flex-direction: column">

        </div>
    </div>
    <div class="row" style="height: 122px">

    </div>
    <?php endif; ?>
</div>