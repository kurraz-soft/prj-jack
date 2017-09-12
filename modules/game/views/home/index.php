<?php
/**
 * @var \yii\web\View $this
 * @var array $menu
 * @var \app\modules\game\models\game_data\Character $character
 */
$this->title = 'Дом';
?>
<div style="background: url(<?= $character->home->getImgLargeHall() ?>) no-repeat center; background-size: cover; width: 100%; height: 100%;">

    <?= \app\modules\game\widgets\GameTextMenu\GameTextMenu::widget([
        'items' => $menu
    ]) ?>

    <div class="game-side-block" style="float: right; margin-right: 100px; display: flex; align-items: center; flex-direction: column">
        <a class="game-teach-btn" href="#">&nbsp;</a>
        <div style="display: flex; align-content: center; justify-content: space-between; width: 100px">
            <a class="game-teach-teacher-btn" href="#">&nbsp;</a>
            <a class="game-teach-school-btn" href="#">&nbsp;</a>
            <a class="game-teach-assistant-btn" href="#">&nbsp;</a>
        </div>
        <br>
        <a class="game-lab-btn" href="#">&nbsp;</a>
        <br>
        <a class="game-dungeon-btn" href="#">
            <img src="<?= $this->context->asset->baseUrl . '/img/cage.png' ?>" />
        </a>
    </div>

    <div style="clear: both"></div>
</div>