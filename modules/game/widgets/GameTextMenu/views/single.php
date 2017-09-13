<?php
/**
 * @var array $item
 * @var string $item_id
 */
if(!empty($item['disabled']))
{
    list($name, $ext) = explode('.', $item['image']);
    $item['image'] = $name . '_gray.'.$ext;
}
?>
<li>
    <a href="<?= empty($item['disabled'])?(empty($item['children'])?$item['url']:('#'. $item_id)):'#' ?>"
       class="game-menu-item <?= (!empty($item['children']) && empty($item['disabled']))?'game-menu-quick-link':'' ?> <?= !empty($item['disabled']) ? "disabled" : '' ?>"
       data-toggle="tooltip"
       data-placement="bottom"
       title="<?= $item['comment'] ?? "" ?>"
    >
        <?php if(!empty($item['image'])): ?>
        <div>
            <img src="<?= $item['image'] ?>">
        </div>
        <?php endif; ?>
        <div class="game-menu-btn"><?= $item['text'] ?></div>
    </a>
</li>