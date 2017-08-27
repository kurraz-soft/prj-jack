<?php
/**
 * @var \yii\web\View $this
 * @var array $menu
 * @var bool $is_first
 */
?>

<div class="game-menu-block" id="game-text-menu-<?= $menu['id'] ?>" style="<?= $is_first?'':'display:none' ?>">
    <?php if(strlen($menu['parent_id'])): ?>
        <div class="col-xs-1" style="width: 30px;">
            <a href="#game-text-menu-<?= $menu['parent_id'] ?>" class="game-menu-btn-back game-menu-quick-link" title="Back"></a>
            <a href="#game-text-menu-<?= $menu['base_parent_id'] ?>" class="game-menu-btn-cancel game-menu-quick-link" title="Cancel"></a>
        </div>
    <?php endif; ?>

    <?= $menu['html'] ?>
</div>