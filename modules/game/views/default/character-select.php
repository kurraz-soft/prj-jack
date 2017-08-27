<?php
/**
 * @var \yii\web\View $this
 * @var array $characters
 */

use yii\helpers\Url;

$this->title = 'Выбор персонажа';
?>
<style>
.character-select-char-block {
    display: inline-block;
    text-align: center;
    margin: 10px;
    font-family: Victoriana;
    font-size: 24px;
}
.character-select-detail {
    display: none;
}
</style>
<div style="background: url(<?= '/assets_game/img/bg/scroll_large.gif' ?>) no-repeat center; background-size: cover; width: 800px; height: 750px; margin: 10px auto">
    <div class="row">
        <h3 style="text-align: center">Выберите персонажа</h3>
        <div class="col-sm-12" style="padding-left: 50px; margin-top: 15px">
            <div class="character-select-list">
                <?php foreach ($characters as $character): ?>
                <div class="character-select-char-block">
                    <a class="character-select-lnk" href="#character-select-<?= $character['id'] ?>">
                        <img src="/assets_game/img/master/master_<?= $character['avatar'] ?>_sepia.jpg">
                    </a>
                    <div><?= $character['name'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php foreach ($characters as $k => $character): ?>
            <div class="character-select-detail" id="character-select-<?= $character['id'] ?>">
                <div class="row" style="height: 612px;padding-top: 10px">
                    <div class="col-md-3">
                        <img src="/assets_game/img/master/master_<?= $character['avatar'] ?>_sepia.jpg">
                        <br>
                        <br>
                        ATTRIBUTES
                    </div>
                    <div class="col-md-9">
                        <h2><?= $character['name'] ?></h2>
                        <h4><?= $character['difficulty'] ?></h4>
                        <br>
                        <p><?= $character['description'] ?></p>
                        <p>Фракция: ...</p>
                        <p>Искр: <?= $character['money'] ?></p>
                    </div>
                </div>
                <?php
                $prev_char = $characters[$k - 1] ?? $characters[count($characters) - 1];
                $next_char = $characters[$k + 1] ?? $characters[0];
                ?>
                <div style="position: relative">
                    <a class="character-select-lnk" style="position: absolute; top: 0; left: 0" href="#character-select-<?= $prev_char['id'] ?>"><img src="/assets_game/img/buttons/back_button.png"></a>
                    <a style="margin: 0 auto; width: 50px; display: block" href="<?= Url::to(['character-select','n' => Yii::$app->request->get('n'),'id' => $character['id']]) ?>"><img src="/assets_game/img/buttons/approve_small.png"></a>
                    <a class="character-select-lnk" style="position: absolute; top: 0; right: 0" href="#character-select-<?= $next_char['id'] ?>"><img src="/assets_game/img/buttons/forward_button.png"></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div style="clear: both"></div>
</div>