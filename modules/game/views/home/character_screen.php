<?php
/**
 * @var \yii\web\View $this
 *
 * @var \app\modules\game\models\game_data\Character $character
 */
use yii\helpers\Url;

$this->title = 'Экран персонажа';
?>
<div style="width: 100%; height: 100%;">
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-md-2">
            <div class="g-info-stats-panel-left">
                <br>
                <p>Имя: <?= $character->name ?></p>
                <p>Ранг: </p>
                <br>
                <h4>ПОКАЗАТЕЛИ</h4>
                <ul class="list-unstyled">
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                    <li>? </li>
                </ul>
                <h4>АВТО-МАГИЯ</h4>
                <ul class="list-unstyled">
                    <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Auspex</li>
                    <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Sententia Veritas</li>
                </ul>
            </div>
        </div>
        <div class="layout-border-v"></div>
        <div class="col-md-8" style="height: calc(100% - 18px - 20px);">
            <div class="row" style="position: relative; padding: 5px">
                <div class="g-tabs-wrap">
                    <a href="#tab-storage" class="g-tab">Склад <div class="g-checkbox g-right checked"></div></a>
                    <a href="#tab-tasks" class="g-tab">Задачи <div class="g-checkbox g-right"></div></a>
                    <a href="#tab-equipment" class="g-tab">Снаряжение <div class="g-checkbox g-right"></div></a>
                    <a href="#tab-diary" class="g-tab">Дневник <div class="g-checkbox g-right"></div></a>
                </div>
                <a class="g-close-btn" href="<?= Url::to(['index']) ?>"></a>
            </div>
            <div class="layout-border-h row"></div>

            <div class="g-tab-content" style="height: calc(100% - 200px); font-size: 18px">
<!--                storage TAB-->
                <div id="tab-storage" class="g-tab-panel active">
                    <div class="row" style="height: 100%">
                        <div class="col-md-4">
                            <h4 style="text-align: center; text-decoration: underline;">КРИОКАМЕРА [67/100]</h4>
                            <p>Овощи x11</p>
                            <p>Мука и крупы x17 </p>
                            <p>Зелень и специи</p>
                            <p>Сыр и молоко</p>
                            <p>Алкоголь</p>
                            <p>Яйца</p>
                            <p>Молоко</p>
                            <p>Сливки</p>
                            <p>Мясной фарш</p>
                            <p>Вырезка</p>
                            <p>Девчатина</p>
                            <p>Сперма исчадия</p>
                        </div>
                        <div class="col-md-4">
                            <h4 style="text-align: center; text-decoration: underline;">ВЕЩЕСТВА</h4>
                            <p></p>
                        </div>
                        <div class="col-md-4">
                            <h4 style="text-align: center; text-decoration: underline;">ДОМ</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">INFO TEXT</div>
                    </div>
                </div>
<!--                storage TAB/-->
<!--                tasks TAB-->
                <div id="tab-tasks" class="g-tab-panel">
                    <div style="height: 100%">
                        <p>TEXT</p>
                    </div>
                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12"">TASKS INFO TEXT</div>
                    </div>
                </div>
<!--                tasks TAB/-->
<!--                EQUIPMENT TAB-->
                <div id="tab-equipment" class="g-tab-panel">
                    <div class="row" style="height: 100%">
                        <div class="col-md-6">
                            <h4 style="text-align: center; text-decoration: underline;">СНАРЯЖЕНИЕ</h4>
                            <p>Доспехи: Без доспеха</p>
                            <p>За спиной: </p>
                            <p>На поясе слева: </p>
                            <p>На поясе справа: </p>
                            <p>На предплечье: </p>
                            <p>За сапогом: </p>
                            <br>
                            <p>Одежда: </p>
                            <p>На голове: </p>
                            <p>В ухе: </p>
                            <p>На шее: </p>
                            <p>Кольцо: </p>
                        </div>
                        <div class="col-md-6">
                            <h4 style="text-align: center; text-decoration: underline;">ДОСТУПНЫЕ ВАРИАНТЫ</h4>
                            <p></p>
                        </div>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">EQ INFO TEXT</div>
                    </div>
                </div>
<!--                EQUIPMENT TAB/-->
<!--                DIARY TAB-->
                <div id="tab-diary" class="g-tab-panel">
                    <div style="height: 100%">
                        <p>TEXT</p>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">DIARY INFO TEXT</div>
                    </div>
                </div>
<!--                DIARY TAB/-->
            </div>

        </div>
        <div class="layout-border-v"></div>
        <div class="col-md-2 g-info-stats-panel-right">
            <h4>НАВЫКИ</h4>
            <ul class="list-unstyled">
                <li>maid</li>
                <li>cook</li>
                <li>nurse</li>
                <li>secretary</li>
                <li>gladiator</li>
                <li>enchanter</li>
                <li>expression</li>
                <li>dancer</li>
                <li>gym</li>
                <li>vocal</li>
                <li>music</li>
                <li>pet</li>
                <li>horse</li>
            </ul>
            <br>
            <h4>СЕКС-ТЕХНИКИ</h4>
            <ul class="list-unstyled">
                <li>petting</li>
                <li>oral</li>
                <li>penetration</li>
                <li>orgy</li>
                <li>demonstration</li>
                <li>fetish</li>
                <li>xeno</li>
            </ul>
        </div>
    </div>
</div>