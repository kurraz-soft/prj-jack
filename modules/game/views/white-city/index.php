<?php
/**
 * @var \yii\web\View $this
 * @var array $menu
 * @var string $bg
 */
$this->title = 'Белый город';
?>
<div style="background: url(<?=  $this->context->asset->baseUrl . '/img/bg/'.$bg ?>) no-repeat center; background-size: cover; width: 100%; height: 100%;">

    <?= \app\modules\game\widgets\GameTextMenu\GameTextMenu::widget([
        'items' => $menu
    ]) ?>

    <div style="clear: both"></div>
</div>