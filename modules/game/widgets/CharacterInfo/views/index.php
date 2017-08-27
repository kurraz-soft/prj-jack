<?php
/**
 * @var \app\modules\game\models\game_data\Character $character
 */
$asset = new \app\modules\game\assets\AppAsset();
?>
 <div class="col-md-12 character-block-item">
    <div class="row">
        <div class="col-md-2 game-status-spell" style="display: flex; flex-direction: column">
            <div>AUS</div>
        </div>
        <div class="col-md-8">
            <a href="#"><img src="<?= $asset->baseUrl ?>/img/master/master_<?= $character->avatar ?>.jpg"></a>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <p>Энергия: <?= $character->energy->out() ?></p>
        <p><?= $character->mood->out() ?></p>
        <div class="game-slave-param-row">
            <div>Дикий жеребец</div>
            <a href="#" class="game-green-btn" title="Секс">&nbsp;</a>
        </div>
        <div class="game-slave-param-row">
            <div>Чист и свеж</div>
            <a href="#" class="game-green-btn" title="Помыться">&nbsp;</a>
        </div>
    </div>
</div>