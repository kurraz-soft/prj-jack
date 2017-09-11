<?php

/**
 * @var $this yii\web\View
 * @var \app\models\User $reg_user
 * @var bool $has_saves
 */

use yii\helpers\Url;
use kartik\widgets\ActiveForm;

$this->title = 'Jack-o-nine Web version';
?>
<div class="text-vertical-center" style="background: center no-repeat url(/img/msg_bg.jpg);">
    <h1>Project Jack</h1>
    <h3>Erotic slave trainer game</h3>
    <br>
    <?php if(Yii::$app->user->isGuest): ?>
        <a href="#dialog-reg" class="btn btn-dark btn-lg" data-toggle="modal">Register</a>
        <a href="<?= Url::to(['@login']) ?>" class="btn btn-dark btn-lg">Login</a>
    <?php else: ?>
        <?php if($has_saves): ?>
        <a href="<?= Url::to(['/game']) ?>" class="btn btn-dark btn-lg">Continue</a>
        <?php endif; ?>
        <a href="<?= Url::to(['save-game/new']) ?>" class="btn btn-dark btn-lg">New Game</a>
        <?php if($has_saves): ?>
        <a href="<?= Url::to(['save-game/load']) ?>" class="btn btn-dark btn-lg">Load Game</a>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php \yii\widgets\Pjax::begin([
    'enablePushState' => false,
]) ?>
<?php $form = ActiveForm::begin([
        'id' => 'dialog-reg',
        'action' => ['@register'],
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => [
            'labelSpan' => 2,
            'deviceSize' => ActiveForm::SIZE_SMALL,
            'inputSpan' => 10,
        ],
        'options' => [
            'tabindex' => -1 ,
            'class' => 'modal fade',
            'data-pjax' => '',
        ],
        'enableAjaxValidation' => false,
]) ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-danger"><?= $form->errorSummary($reg_user) ?></div>
                <?= $form->field($reg_user,'login')->textInput() ?>
                <?= $form->field($reg_user, 'password')->passwordInput() ?>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    <!-- /.modal -->
<?php ActiveForm::end() ?>
<?php \yii\widgets\Pjax::end() ?>
