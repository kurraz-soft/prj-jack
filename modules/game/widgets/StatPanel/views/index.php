<?php
/**
 * @var \app\modules\game\models\game_data\GameDataRegister $gameRegister
 */
?>
<div class="col-lg-12 game-status-bar">
    День: <?= $gameRegister->date->getDay() ?> |
    Декада: <?= $gameRegister->date->getDecade() ?> |
    Искр: <?= $gameRegister->character->wallet->money ?> |
    <?php if($gameRegister->debt->isExist()): ?>
    Долг: <?= $gameRegister->debt->sum ?> искр (<?= $gameRegister->debt->daysLeft($gameRegister->date->getDay()) ?> дн.) |
    <?php endif; ?>
    Контракт: 20 дн.
</div>
