<?php
/**
 * @var \yii\web\View $this
 *
 * @var \app\modules\game\models\game_data\Person $apprentice
 * @var \app\modules\game\models\game_data\Character $character
 */
use yii\helpers\Url;
use app\modules\game\models\game_data\rules\Sleep;
use app\modules\game\models\game_data\rules\Food;
use app\modules\game\models\game_data\rules\FoodValue;
use app\modules\game\models\game_data\rules\Cook;
use app\modules\game\models\game_data\rules\BeastMilker;
use app\modules\game\models\game_data\rules\Maid;
use app\modules\game\models\game_data\rules\MasterWasher;
use app\modules\game\models\game_data\rules\NoMasturbation;
use app\modules\game\models\game_data\rules\NoCumming;
use app\modules\game\models\game_data\rules\MasterName;
use app\modules\game\models\game_data\rules\Silence;
use app\modules\game\models\game_data\rules\NoDefecation;
use app\modules\game\models\game_data\rules\Animal;
use app\modules\game\models\game_data\rules\Alarm;
use app\modules\game\models\game_data\rules\Urinar;
use app\modules\game\models\game_data\rules\Toilet;
use app\modules\game\models\game_data\rules\VBalls;
use app\modules\game\models\game_data\rules\Forced;

$this->title = 'Экран ассистентки';
?>
<div style="width: 100%; height: 100%;">
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-md-2">
            <?= $this->renderAjax('_apprentice_attributes', ['apprentice' => $apprentice]) ?>
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
                                <li class="clearfix"><a data-info-id="sleep-<?= Sleep::COLD_FLOOR ?>" href="<?= Url::to(['assistant-rule','id' =>'sleep','value' => Sleep::COLD_FLOOR]) ?>" class="g-checkbox g-left g-ajax-link g-radio <?= $apprentice->assistantBehavior->rules->sleep->getValue() == Sleep::COLD_FLOOR ? 'checked' : ''?>" rel="sleep_mode"></a>&nbsp; - Холодный пол</li>
                                <li class="clearfix"><a data-info-id="sleep-<?= Sleep::MAT ?>" href="<?= Url::to(['assistant-rule','id' =>'sleep','value' => Sleep::MAT]) ?>" class="g-checkbox g-left g-ajax-link g-radio <?= $apprentice->assistantBehavior->rules->sleep->getValue() == Sleep::MAT ? 'checked' : ''?>" rel="sleep_mode"></a>&nbsp; - Циновка и плед</li>
                                <li class="clearfix"><a data-info-id="sleep-<?= Sleep::WITH_MASTER ?>" href="<?= Url::to(['assistant-rule','id' =>'sleep','value' => Sleep::WITH_MASTER]) ?>" class="g-checkbox g-left g-ajax-link g-radio <?= $apprentice->assistantBehavior->rules->sleep->getValue() == Sleep::WITH_MASTER ? 'checked' : ''?>" rel="sleep_mode"></a>&nbsp; - Спи со мной</li>
                                <li class="clearfix"><a data-info-id="sleep-<?= Sleep::BOUDOIR ?>" href="<?= Url::to(['assistant-rule','id' =>'sleep','value' => Sleep::BOUDOIR]) ?>" class="g-checkbox g-left g-ajax-link g-radio <?= $apprentice->assistantBehavior->rules->sleep->getValue() == Sleep::BOUDOIR ? 'checked' : ''?>" rel="sleep_mode"></a>&nbsp; - Спи в будуаре</li>
                            </ul>
                            <h4>РЕЖИМ ПИТАНИЯ:</h4>
                            <ul class="list-unstyled">
                                <li class="clearfix"><a data-info-id="food-<?= Food::NO ?>" href="<?= Url::to(['assistant-rule','id' =>'food','value' => Food::NO]) ?>" class="g-checkbox g-left g-ajax-link g-radio <?= $apprentice->assistantBehavior->rules->food->getValue() == Food::NO? 'checked' : ''?>" rel="food"></a>&nbsp; - Ничего</li>
                                <li class="clearfix"><a data-info-id="food-<?= Food::DRY_FOOD ?>" href="<?= Url::to(['assistant-rule','id' =>'food','value' => Food::DRY_FOOD]) ?>" class="g-checkbox g-left g-ajax-link g-radio <?= $apprentice->assistantBehavior->rules->food->getValue() == Food::DRY_FOOD? 'checked' : ''?>" rel="food"></a>&nbsp; - Сухой корм</li>
                                <li class="clearfix"><a data-info-id="food-<?= Food::FRESH_FOOD ?>" href="<?= Url::to(['assistant-rule','id' =>'food','value' => Food::FRESH_FOOD]) ?>" class="g-checkbox g-left g-ajax-link g-radio <?= $apprentice->assistantBehavior->rules->food->getValue() == Food::FRESH_FOOD? 'checked' : ''?>" rel="food"></a>&nbsp; - Свежая еда</li>
                                <li class="clearfix"><a data-info-id="food-<?= Food::BEAST_SPERM ?>" href="<?= Url::to(['assistant-rule','id' =>'food','value' => Food::BEAST_SPERM]) ?>" class="g-checkbox g-ajax-link disabled g-left g-radio <?= $apprentice->assistantBehavior->rules->food->getValue() == Food::BEAST_SPERM? 'checked' : ''?>" rel="food"></a>&nbsp; - Сперма исчадия</li>
                                <li class="clearfix"><a data-info-id="food-<?= Food::MASTERS_FOOD ?>" href="<?= Url::to(['assistant-rule','id' =>'food','value' => Food::MASTERS_FOOD]) ?>" class="g-checkbox g-left g-ajax-link <?= $apprentice->assistantBehavior->rules->food->masters_food ? 'checked' : ''?>"></a>&nbsp; - Объедки со стола</li>
                            </ul>
                            <br />
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
                                <li class="clearfix">Ты кухарка - &nbsp;<a data-info-id="cook" href="<?= Url::to(['assistant-rule','id' =>'cook']) ?>" class="g-checkbox g-ajax-link g-right <?= $apprentice->assistantBehavior->rules->cook->getValue()? 'checked' : ''?>"></a></li>
                                <li class="clearfix">Ты доярка - &nbsp;<a data-info-id="beast_milker" href="<?= Url::to(['assistant-rule','id' =>'beast_milker']) ?>" class="g-checkbox g-ajax-link g-right <?= $apprentice->assistantBehavior->rules->beast_milker->getValue()? 'checked' : ''?>"></a></li>
                                <li class="clearfix">Ты горничная - &nbsp;<a data-info-id="maid" href="<?= Url::to(['assistant-rule','id' =>'maid']) ?>" class="g-checkbox g-ajax-link g-right <?= $apprentice->assistantBehavior->rules->maid->getValue()? 'checked' : ''?>"></a></li>
                                <li class="clearfix">Ты меня моешь - &nbsp;<a data-info-id="master_washer" href="<?= Url::to(['assistant-rule','id' =>'master_washer']) ?>" class="g-checkbox g-ajax-link g-right <?= $apprentice->assistantBehavior->rules->master_washer->getValue()? 'checked' : ''?>"></a></li>
                                <li class="clearfix">Ты моешь ученицу - &nbsp;<a data-info-id="apprentice_washer" href="<?= Url::to(['assistant-rule','id' =>'apprentice_washer']) ?>" class="g-checkbox g-ajax-link g-right <?= $apprentice->assistantBehavior->rules->apprentice_washer->getValue()? 'checked' : ''?>"></a></li>
                                <li class="clearfix">Ты будильник - &nbsp;<a data-info-id="alarm" href="<?= Url::to(['assistant-rule','id' =>'alarm']) ?>" class="g-checkbox g-ajax-link g-right <?= $apprentice->assistantBehavior->rules->alarm->getValue()? 'checked' : ''?>"></a></li>
                                <li class="clearfix">Ты надзираешь - &nbsp;<a data-info-id="supervisor" href="<?= Url::to(['assistant-rule','id' =>'supervisor']) ?>" class="g-checkbox g-ajax-link g-right <?= $apprentice->assistantBehavior->rules->supervisor->getValue()? 'checked' : ''?>"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12 g-info-text-content"></div>
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
                            <p>Доспехи: <?= $apprentice->equipment->armor->name ?></p>
                            <p>За спиной: <?= $apprentice->equipment->weaponBack->name ?></p>
                            <p>На поясе слева: <?= $apprentice->equipment->weaponLeft->name ?></p>
                            <p>На поясе справа: <?= $apprentice->equipment->weaponRight->name ?></p>
                            <br>
                            <p>Одежда: <?= $apprentice->equipment->cloth->name ?></p>
                            <p>На голове: <?= $apprentice->equipment->head->name ?></p>
                            <p>В ушах: <?= $apprentice->equipment->ears->name ?></p>
                            <p>На шее: <?= $apprentice->equipment->neck->name ?></p>
                            <p>На руках: <?= $apprentice->equipment->hands->name ?></p>
                            <p>В сосках: <?= $apprentice->equipment->nipples->name ?></p>
                            <p>В клиторе: <?= $apprentice->equipment->clit->name ?></p>
                            <p>На ногах: <?= $apprentice->equipment->legs->name ?></p>
                            <p>Левое кольцо: <?= $apprentice->equipment->ringLeft->name ?></p>
                            <p>Правое кольцо: <?= $apprentice->equipment->ringRight->name ?></p>
                            <p>В пупке: <?= $apprentice->equipment->navel->name ?></p>
                            <p>В языке: <?= $apprentice->equipment->tongue->name ?></p>
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
                    <div class="row g-tab-aura" style="height: 100%; color: #0000CD">
                        <p><?= $apprentice->aura->obedience->getStatus() ?> <?= $apprentice->aura->power->getStatus() ?></p>
                        <p><?= $apprentice->aura->lust->getStatus() ?></p>
                        <p><?= $apprentice->aura->fear->getStatus() ?></p>
                        <p><?= $apprentice->aura->desperation->getStatus() ?></p>
                        <p><?= $apprentice->aura->awareness->getStatus() ?></p>
                        <p><?= $apprentice->aura->taming->getStatus() ?></p>
                        <p><?= $apprentice->aura->habit->getStatus() ?></p>
                        <p><?= $apprentice->aura->corruption->getStatus() ?></p>
                        <p><?= $apprentice->aura->loyalty->getStatus() ?></p>
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
            <?= $this->renderAjax('_apprentice_skills',['apprentice' => $apprentice]) ?>
        </div>
    </div>
</div>

<!--INFO TEXTS-->
<div style="display: none">
    <div id="sleep-<?= Sleep::CAGE ?>-1"><?= $apprentice->assistantBehavior->rules->sleep->getValueText(Sleep::CAGE) ?></div>
    <div id="sleep-<?= Sleep::COLD_FLOOR ?>-1"><?= $apprentice->assistantBehavior->rules->sleep->getValueText(Sleep::COLD_FLOOR) ?></div>
    <div id="sleep-<?= Sleep::MAT ?>-1"><?= $apprentice->assistantBehavior->rules->sleep->getValueText(Sleep::MAT) ?></div>
    <div id="sleep-<?= Sleep::WITH_MASTER ?>-1"><?= $apprentice->assistantBehavior->rules->sleep->getValueText(Sleep::WITH_MASTER) ?></div>
    <div id="sleep-<?= Sleep::BOUDOIR ?>-1"><?= $apprentice->assistantBehavior->rules->sleep->getValueText(Sleep::BOUDOIR) ?></div>
    <div id="food-<?= Food::NO ?>-1"><?= $apprentice->assistantBehavior->rules->food->getValueText(Food::NO) ?></div>
    <div id="food-<?= Food::DRY_FOOD ?>-1"><?= $apprentice->assistantBehavior->rules->food->getValueText(Food::DRY_FOOD) ?></div>
    <div id="food-<?= Food::FRESH_FOOD ?>-1"><?= $apprentice->assistantBehavior->rules->food->getValueText(Food::FRESH_FOOD) ?></div>
    <div id="food-<?= Food::BEAST_SPERM ?>-1"><?= $apprentice->assistantBehavior->rules->food->getValueText(Food::BEAST_SPERM) ?></div>
    <div id="food-<?= Food::MASTERS_FOOD ?>-1"><?= $apprentice->assistantBehavior->rules->food->getValueText(Food::MASTERS_FOOD,['masters_food' => 1]) ?></div>
    <div id="food-<?= Food::MASTERS_FOOD ?>-0"><?= $apprentice->assistantBehavior->rules->food->getValueText(Food::MASTERS_FOOD,['masters_food' => 0]) ?></div>
    <div id="cook-0"><?= $apprentice->assistantBehavior->rules->cook->getValueText(0) ?></div>
    <div id="cook-1"><?= $apprentice->assistantBehavior->rules->cook->getValueText(1) ?></div>
    <div id="beast_milker-0"><?= $apprentice->assistantBehavior->rules->beast_milker->getValueText(0) ?></div>
    <div id="beast_milker-1"><?= $apprentice->assistantBehavior->rules->beast_milker->getValueText(1) ?></div>
    <div id="maid-0"><?= $apprentice->assistantBehavior->rules->maid->getValueText(0) ?></div>
    <div id="maid-1"><?= $apprentice->assistantBehavior->rules->maid->getValueText(1) ?></div>
    <div id="master_washer-0"><?= $apprentice->assistantBehavior->rules->master_washer->getValueText(0) ?></div>
    <div id="master_washer-1"><?= $apprentice->assistantBehavior->rules->master_washer->getValueText(1) ?></div>
    <div id="apprentice_washer-0"><?= $apprentice->assistantBehavior->rules->apprentice_washer->getValueText(0) ?></div>
    <div id="apprentice_washer-1"><?= $apprentice->assistantBehavior->rules->apprentice_washer->getValueText(1) ?></div>
    <div id="supervisor-0"><?= $apprentice->assistantBehavior->rules->supervisor->getValueText(0) ?></div>
    <div id="supervisor-1"><?= $apprentice->assistantBehavior->rules->supervisor->getValueText(1) ?></div>
    <div id="alarm-0"><?= $apprentice->assistantBehavior->rules->alarm->getValueText(0) ?></div>
    <div id="alarm-1"><?= $apprentice->assistantBehavior->rules->alarm->getValueText(1) ?></div>
</div>
<!--/INFO TEXTS-->