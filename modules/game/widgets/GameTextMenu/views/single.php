<?php
/**
 * @var array $item
 * @var string $item_id
 */
?>
<li>
    <a href="<?= empty($item['children'])?$item['url']:('#'. $item_id) ?>" class="game-menu-item <?= !empty($item['children'])?'game-menu-quick-link':'' ?>">
        <?php if(!empty($item['image'])): ?>
        <div><img src="<?= $item['image'] ?>"></div>
        <?php endif; ?>
        <div class="game-menu-btn"><?= $item['text'] ?></div>
    </a>
</li>