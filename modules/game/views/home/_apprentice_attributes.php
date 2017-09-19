<?php
/**
 * @var \app\modules\game\models\game_data\Person $apprentice
 */
?>

<div class="g-info-stats-panel-left">
    <p>Имя: <?= $apprentice->name ?></p>
    <p>Возраст: <?= $apprentice->age->getStatus() ?></p>
    <p>Ранг: <?= $apprentice->rank->getStatus() ?></p>
    <p>Прошло дней: <?= $apprentice->days_owned ?></p>
    <h4>РЕЗЮМЕ</h4>
    <ul class="list-unstyled">
        <li><?= $apprentice->attributes->beauty->getStatus() ?></li>
        <li><?= $apprentice->attributes->stamina->getStatus() ?></li>
        <li><?= $apprentice->attributes->sensuality->getStatus() ?></li>
        <li><?= $apprentice->attributes->temperament->getStatus() ?></li>
        <li><?= $apprentice->attributes->intellect->getStatus() ?></li>
        <li><?= $apprentice->attributes->ego->getStatus() ?></li>
        <li><?= $apprentice->attributes->pride->getStatus() ?></li>
        <li><?= $apprentice->attributes->exoticism->getStatus() ?></li>
        <li><?= $apprentice->attributes->constitution->getStatus() ?></li>
        <li><?= $apprentice->attributes->style->getStatus() ?></li>
        <li><?= $apprentice->attributes->arenaFame->getStatus() ?></li>
    </ul>
    <h4>ОСОБЕННОСТИ</h4>
    <ul class="list-unstyled">
        <?php foreach ($apprentice->traits->getRevealedTraits() as $trait): ?>
        <li><?= $trait->getName() ?></li>
        <?php endforeach; ?>
    </ul>
</div>