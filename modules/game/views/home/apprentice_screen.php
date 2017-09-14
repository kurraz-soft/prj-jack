<?php
/**
 * @var \yii\web\View $this
 *
 * @var \app\modules\game\models\game_data\Apprentice $apprentice
 * @var \app\modules\game\models\game_data\Character $character
 */
use yii\helpers\Url;

$this->title = 'Экран ученика';
?>
<div style="width: 100%; height: 100%;">
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-md-2">
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

            <div class="g-tab-content" style="height: calc(100% - 200px); font-size: 18px">
<!--                RULES TAB-->
                <div id="tab-rules" class="g-tab-panel active">
                    <div class="row" style="background: url(<?= $character->home->getImgHall() ?>) no-repeat center; background-size: cover; color: #d8b317; height: 100%">
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
                                    background: url(/assets_game/img/<?= $apprentice->visuals->fullimage ?>.gif);
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

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">INFO TEXT</div>
                    </div>
                </div>
<!--                RULES TAB/-->
<!--                ANATOMY TAB-->
                <div id="tab-anatomy" class="g-tab-panel">
                    <div style="height: 100%">
                        <div class="row">
                            <div class="col-md-6">
                                <div style="
                                background-image: url(/assets_game/img/girls/body/<?= $apprentice->body->breast->getImageId() ?>.jpg);
                                width: 400px;
                                height: 290px"></div>
                                <br>
                                <p><?= $apprentice->body->breast->getStatus() ?></p>
                                <p><?= $apprentice->body->breast->getStatusLactation() ?></p>
                                <p><?= $apprentice->body->breast->getStatusModifications() ?></p>
                                <p><?= $apprentice->age->getStatus() ?></p>
                            </div>
                            <div class="col-md-6" style="text-align: right">
                                <div style="
                                background-image: url(/assets_game/img/girls/body/<?= $apprentice->body->vagina->getImageId() ?>.jpg);
                                width: 400px;
                                height: 290px;
                                float: right;"></div>
                                <div class="clearfix"></div>
                                <br>
                                <p><?= $apprentice->body->vagina->getStatus() ?></p>
                                <p><?= $apprentice->body->anus->getStatus() ?></p>
                                <p><?= $apprentice->body->vagina->getStatusClit() ?></p>
                                <p><?= $apprentice->body->vagina->getStatusModification() ?></p>
                                <p><?= $apprentice->body->tattoo->getStatus() ?></p>
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
                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12"">ANATOMY INFO TEXT</div>
                    </div>
                </div>
<!--                ANATOMY TAB/-->
<!--                EQUIPMENT TAB-->
                <div id="tab-equipment" class="g-tab-panel">
                    <div class="row" style="height: 100%">
                        <div class="col-md-6">
                            <h4 style="text-align: center; text-decoration: underline;">СНАРЯЖЕНИЕ</h4>
                            <p>Доспехи: Без доспеха</p>
                            <p>За спиной: </p>
                            <p>На поясе слева: </p>
                            <p>На поясе справа: </p>
                            <br>
                            <p>Одежда: </p>
                            <p>На голове: </p>
                            <p>В ушах: </p>
                            <p>На шее: </p>
                            <p>На руках: </p>
                            <p>В сосках: </p>
                            <p>В клиторе: </p>
                            <p>На ногах: </p>
                            <p>Левое кольцо: </p>
                            <p>Правое кольцо: </p>
                            <p>В пупке: </p>
                            <p>В языке: </p>
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
<!--                AURA TAB-->
                <div id="tab-aura" class="g-tab-panel">
                    <div class="row g-tab-aura" style="height: 100%">
                        <p>obedience</p>
                        <p>lust</p>
                        <p>fear</p>
                        <p>desperation</p>
                        <p>awareness</p>
                        <p>taming</p>
                        <p>habit</p>
                        <p>corruption</p>
                        <p>loyalty</p>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">AURA INFO TEXT</div>
                    </div>
                </div>
<!--                AURA TAB/-->
            </div>

        </div>
        <div class="layout-border-v"></div>
        <div class="col-md-2 g-info-stats-panel-right">
            <h4>НАВЫКИ</h4>
            <ul class="list-unstyled">
                <li><?= $apprentice->skills->maid->getStatus() ?></li>
                <li><?= $apprentice->skills->cook->getStatus() ?></li>
                <li><?= $apprentice->skills->nurse->getStatus() ?></li>
                <li><?= $apprentice->skills->secretary->getStatus() ?></li>
                <li><?= $apprentice->skills->gladiator->getStatus() ?></li>
                <li><?= $apprentice->skills->enchanter->getStatus() ?></li>
                <li><?= $apprentice->skills->expression->getStatus() ?></li>
                <li><?= $apprentice->skills->dancer->getStatus() ?></li>
                <li><?= $apprentice->skills->gymnastics->getStatus() ?></li>
                <li><?= $apprentice->skills->vocal->getStatus() ?></li>
                <li><?= $apprentice->skills->music->getStatus() ?></li>
                <li><?= $apprentice->skills->pet->getStatus() ?></li>
                <li><?= $apprentice->skills->horse->getStatus() ?></li>
            </ul>
            <br>
            <h4>СЕКС-ТЕХНИКИ</h4>
            <ul class="list-unstyled">
                <li><?= $apprentice->skillsSex->petting->getStatus() ?></li>
                <li><?= $apprentice->skillsSex->oral->getStatus() ?></li>
                <li><?= $apprentice->skillsSex->penetration->getStatus() ?></li>
                <li><?= $apprentice->skillsSex->orgy->getStatus() ?></li>
                <li><?= $apprentice->skillsSex->demonstration->getStatus() ?></li>
                <li><?= $apprentice->skillsSex->fetish->getStatus() ?></li>
                <li><?= $apprentice->skillsSex->xenophily->getStatus() ?></li>
            </ul>
        </div>
    </div>
</div>