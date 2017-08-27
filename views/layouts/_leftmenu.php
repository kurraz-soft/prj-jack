<?php
use yii\helpers\Url;
?>

<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="<?= Url::home() ?>">Home</a></li>
        <?php if(!Yii::$app->user->isGuest): ?>
        <li class="sidebar-brand"><a href="<?= Url::to(['@logout']) ?>">Logout</a></li>
        <?php endif; ?>
    </ul>
</nav>