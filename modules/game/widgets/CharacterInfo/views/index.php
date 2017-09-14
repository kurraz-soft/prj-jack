<?php
/**
 * @var \app\modules\game\models\game_data\Character $character
 */
use yii\helpers\Url;

$asset = new \app\modules\game\assets\AppAsset();
?>
 <div class="col-md-12 character-block-item">
    <div class="row">
        <div class="col-md-2 game-status-spell" style="display: flex; flex-direction: column">
            <div title="Auspex" data-toggle="tooltip">AUS</div>
        </div>
        <div class="col-md-8">
            <a href="<?= Url::to(['home/character-screen']) ?>"><img src="<?= $asset->baseUrl ?>/img/master/master_<?= $character->avatar ?>.jpg"></a>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <p>Энергия: <?= $character->energy->out() ?></p>
        <p><?= $character->mood->getStatus() ?></p>
        <div class="game-slave-param-row">
            <div><?= $character->attributes->libido->getStatus() ?></div>
            <?php if($character->attributes->libido->value > 0): ?>
            <a href="#game-text-menu-0-0-1" class="game-green-btn game-menu-quick-link" title="Секс" data-toggle="tooltip">&nbsp;</a>
            <?php endif; ?>
        </div>
        <div class="game-slave-param-row">
            <div><?= $character->attributes->hygiene->getStatus() ?></div>
            <?php if($character->attributes->hygiene->value < 5): ?>
            <a href="#" class="game-green-btn" title="Помыться">&nbsp;</a>
            <?php endif; ?>
        </div>
    </div>
</div>