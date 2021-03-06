<?php
/**
 * @var \yii\web\View $this
 * @var \app\modules\game\models\game_data\Character $character
 * @var \app\modules\game\models\game_data\Person $apprentice
 */
use yii\helpers\Url;

$this->title = 'Дом';
?>
<div style="background: url(<?= $character->home->getImgLargeHall() ?>) no-repeat center; background-size: cover; width: 100%; height: 100%;">

    <?= \app\modules\game\widgets\GameTextMenu\GameTextMenu::widget([
        'items' => \app\modules\game\models\game_data\text_menu\HomeMenu::getMenu(),
        'params' => [
            'apprentice_name' => $apprentice->name ?? '',
        ],
    ]) ?>

    <div class="game-side-block" style="float: right; margin-right: 100px; display: flex; align-items: center; flex-direction: column">
        <a class="game-teach-btn" href="<?= Url::to(['apprentice-teach-screen']) ?>">&nbsp;</a>
        <div style="display: flex; align-content: center; justify-content: space-between; width: 100px">
            <a class="game-teach-teacher-btn" href="<?= Url::to(['apprentice-teach-screen','#' => 'tab-tutor']) ?>">&nbsp;</a>
            <a class="game-teach-school-btn" href="<?= Url::to(['apprentice-teach-screen','#' => 'tab-school']) ?>">&nbsp;</a>
            <a class="game-teach-assistant-btn" href="<?= Url::to(['apprentice-teach-screen','#' => 'tab-assistant']) ?>">&nbsp;</a>
        </div>
        <br>
        <a class="game-lab-btn" href="#">&nbsp;</a>
        <br>
        <a class="game-dungeon-btn" href="#">
            <img src="<?= '/assets_game/img/cage.png' ?>" />
        </a>
    </div>

    <div style="clear: both"></div>
</div>