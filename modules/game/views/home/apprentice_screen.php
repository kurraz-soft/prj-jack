<?php
/**
 * @var \yii\web\View $this
 * @var array $menu
 *
 * @var \app\modules\game\models\game_data\Apprentice $apprentice
 */
use yii\helpers\Url;

$this->title = 'Экран ученика';
?>
<div style="width: 100%; height: 100%;">
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-md-2">
            <div class="g-info-stats-panel-left">
                <p>Имя: </p>
                <p>Возраст: </p>
                <p>Ранг: </p>
                <p>Прошло дней: </p>
                <h4>РЕЗЮМЕ</h4>
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
                <h4>ОСОБЕННОСТИ</h4>
                <ul class="list-unstyled">
                    <li>?</li>
                </ul>
            </div>
        </div>
        <div class="layout-border-v"></div>
        <div class="col-md-8" style="height: calc(100% - 18px - 20px);">
            <div class="row" style="position: relative; padding: 5px">
                <div class="g-tabs-wrap">
                    <a href="#tab-rules" class="g-tab">Правила <div class="g-checkbox g-right checked"></div></a>
                    <a href="#tab-anatomy" class="g-tab">Анатомия <div class="g-checkbox g-right"></div></a>
                    <a href="#tab-equipment" class="g-tab">Снаряжение <div class="g-checkbox g-right"></div></a>
                    <a href="#tab-aura" class="g-tab">Аура <div class="g-checkbox g-right"></div></a>
                </div>
                <a class="g-close-btn" href="<?= Url::to(['index']) ?>"></a>
            </div>
            <div class="layout-border-h row"></div>

            <div class="g-tab-content" style="height: calc(100% - 200px);">
<!--                RULES TAB-->
                <div id="tab-rules" class="row g-tab-panel active" style="background: url(<?=  $this->context->asset->baseUrl . '/img/bg/interiors/basic_kitchen.jpg' ?>) no-repeat center; background-size: cover; color: #d8b317; height: 100%">
                    <div class="col-md-3 g-transparent g-rules-panel">
                        <h4>РЕЖИМ СНА:</h4>
                        <ul class="list-unstyled">
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - В клетке</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Холодный пол</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Спи со мной</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Спи в будуаре</li>
                        </ul>
                        <h4>РЕЖИМ ПИТАНИЯ:</h4>
                        <ul class="list-unstyled">
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Сухой корм</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Свежая еда</li>
                            <li class="clearfix"><a href="#" class="g-checkbox disabled g-left"></a>&nbsp; - Сперма исчадия</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Объедки со стола</li>
                        </ul>
                        <br />
                        <ul class="list-unstyled">
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Похудание</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Поддержка веса</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Набор веса</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Диетолог</li>
                            <li class="clearfix"><a href="#" class="g-checkbox g-left"></a>&nbsp; - Биодобавки</li>
                        </ul>
                        <h4>СЧЕТЧИК КАЛОРИЙ:</h4>
                        <p>1 калорий</p>
                    </div>
                    <div class="col-md-6" style="height: 100%">
                        <div class="g-apprentice-full-image-wrap">
                            <div class="g-apprentice-full-image" style="
                                background: url(/assets_game/img/girls/full/001_blond_long_blue.gif);
                            "></div>
                        </div>
                    </div>
                    <div class="col-md-3 g-transparent g-rules-panel" style="text-align: right;">
                        <h4>ПРАВИЛА:</h4>
                        <ul class="list-unstyled">
                            <li class="clearfix">Ты кухарка - &nbsp;<a href="#" class="g-checkbox g-right"></a></li>
                        </ul>
                    </div>
                </div>
<!--                RULES TAB/-->
<!--                ANATOMY TAB-->
                <div id="tab-anatomy" class="g-tab-panel" style="font-size: 18px">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="
                            background-image: url(/assets_game/img/girls/body/boobs_B.jpg);
                            width: 400px;
                            height: 290px"></div>
                            <br>
                            <p>breast</p>
                            <p>lactation</p>
                            <p>nipples_piercing</p>
                            <p>breast_mod</p>
                            <p>age</p>
                        </div>
                        <div class="col-md-6" style="text-align: right">
                            <div style="
                            background-image: url(/assets_game/img/girls/body/pussy_g1.jpg);
                            width: 400px;
                            height: 290px;
                            float: right;"></div>
                            <div class="clearfix"></div>
                            <br>
                            <p>vagina</p>
                            <p>anus</p>
                            <p>clit</p>
                            <p>vagina_mod</p>
                            <p>tattoo</p>
                        </div>
                    </div>
                    <p style="text-align: center">
                        Шарм
                        <br>
                        Красота = Природная красота + Пластическая операция - (Шрамы + Синяки)<br>
                        Экзотичность = Природная экзотичность + Тауировок нет + Пирсинг + Одежда<br>
                        Стиль = Одежда + Без косметики + Растрепаные волосы + Уход за телом + Гигиена + Грация<br>
                    </p>
                </div>
<!--                ANATOMY TAB/-->
                <div id="tab-equipment" class="g-tab-panel">

                </div>
<!--                AURA TAB-->
                <div id="tab-aura" class="g-tab-panel">

                </div>
<!--                AURA TAB/-->
            </div>

            <div class="layout-border-h row"></div>
            <div class="row">
                <div class="col-md-12" style="height: 150px;">INFO TEXT</div>
            </div>
        </div>
        <div class="layout-border-v"></div>
        <div class="col-md-2 g-info-stats-panel-right" style="">
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