<?php
/**
 * @var \yii\web\View $this
 *
 * @var \app\modules\game\models\game_data\base\BaseGameAction $action
 */
use yii\helpers\Url;

$this->title = 'Action';
?>
<script>
$(function () {
    $('body').on('click','.g-action-btn-forward',function (e) {
        var $slide = $(this).parents('.g-action-slide');
        var current_slide_id = parseInt($slide.data('slideId'));
        if($(this).attr('href') === '#')
        {
            e.preventDefault();

            $slide.removeClass('active');
            current_slide_id = current_slide_id + 1;
            $slide = $('.g-action-slide[data-slide-id="' + current_slide_id + '"]');
            $slide.addClass('active');
        }
    });
    $('body').on('click','.g-action-btn-backward',function (e) {
        e.preventDefault();

        var $slide = $(this).parents('.g-action-slide');
        var current_slide_id = parseInt($slide.data('slideId'));
        if(current_slide_id > 0)
        {
            $slide.removeClass('active');
            current_slide_id = current_slide_id - 1;
            $slide = $('.g-action-slide[data-slide-id="' + current_slide_id + '"]');
            $slide.addClass('active');
        }
    });
})
</script>
<div style="width: 100%; height: 100%; font-size: 20px">
    <div class="row" style="width: 100%; height: 100%;">
        <?php foreach ($action->slides as $k => $slide): ?>
        <div class="col-md-8 g-action-slide <?= $k == 0 ? 'active' : '' ?>" data-slide-id="<?= $k ?>">
            <div class="row" style="
                background: url(<?= $slide->bg_img ?>) no-repeat center;
                background-size: cover;
                height: 70%;
                line-height: 100%;
                position: relative;"
            >
                <?php if($slide->char_img): ?>
                    <div style="position: absolute; bottom: 0; left: calc(50% - 400px);"><img src="<?= $slide->getCharImgPath() ?>"></div>
                <?php endif; ?>
            </div>
            <div class="layout-border-h row"></div>
            <div class="row g-action-slide-text">
                <?php if ($slide->person_name): ?>
                [<?= $slide->person_name ?>]
                <br>
                <?php endif; ?>
                <?= $slide->text ?>

                <a class="g-btn g-action-btn-forward" href="<?= ($k == count($action->slides) - 1) ?  Url::to($action->getEndRoute()) : '#' ?>"></a>
                <a class="g-btn g-action-btn-backward <?= $k == 0 ? 'disabled': '' ?>" href=""></a>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="layout-border-v"></div>
        <div class="col-md-4" style="width: calc(33.33% - 18px)">
            <div style="font-family: Victoriana; text-align: center;">
                <h1><?= $action->caption ?></h1>
                <h3><?= $action->description ?></h3>
                <br>
                <h3>Информация к размышлению:</h3>
            </div>
            <div>
                <?= $action->info ?>
            </div>
        </div>
    </div>
</div>