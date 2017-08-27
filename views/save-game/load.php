<?php

/**
 * @var $this yii\web\View
 * @var \app\models\User $reg_user
 * @var bool $has_saves
 * @var GameData[] $saves
 */

use yii\helpers\Url;
use app\modules\game\models\GameData;

$this->title = 'New Game';
?>
<div class="text-vertical-center" style="background: center no-repeat url(/img/msg_bg.jpg);">
    <h1>Jack-o-nine tails</h1>
    <h3>Erotic slave trainer game</h3>
    <br>
    <h3>Choose save slot</h3>
    <br>
    <?php for($i = 0; $i < GameData::MAX_SAVES; $i++): ?>
    <a href="<?= isset($saves[$i])?Url::to(['load', 'n' => $i]):'#' ?>" class="btn btn-dark btn-lg" <?= isset($saves[$i])?'':'disabled' ?>>
        Save #<?= $i ?>
        <?php if(isset($saves[$i])): ?>
            Date <?= $saves[$i]->date_update ?>
        <?php else: ?>
            Empty
        <?php endif; ?>
    </a>
    <br>
    <br>
    <?php endfor; ?>
</div>