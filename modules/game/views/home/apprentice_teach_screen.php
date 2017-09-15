<?php
/**
 * @var \yii\web\View $this
 *
 * @var \app\modules\game\models\game_data\Apprentice $apprentice
 * @var \app\modules\game\models\game_data\Character $character
 */
use yii\helpers\Url;

$this->title = 'Обучение ученика';
?>
<script>
    checkTabHash();
</script>
<div style="width: 100%; height: 100%;">
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-md-2">
            <?= $this->renderAjax('_apprentice_attributes', ['apprentice' => $apprentice]) ?>
        </div>
        <div class="layout-border-v"></div>
        <div class="col-md-8" style="height: calc(100% - 18px - 20px);">
            <div class="row" style="position: relative; padding: 5px">
                <div class="g-tabs-wrap">
                    <a href="#tab-personally" class="g-tab">Лично <div class="g-checkbox g-right checked"></div></a>
                    <a href="#tab-tutor" class="g-tab">Репетитор <div class="g-checkbox g-right"></div></a>
                    <a href="#tab-school" class="g-tab">Школа <div class="g-checkbox g-right"></div></a>
                    <a href="#tab-assistant" class="g-tab">Ассистентка <div class="g-checkbox g-right"></div></a>
                </div>
                <a class="g-close-btn" href="<?= Url::to(['index']) ?>"></a>
            </div>
            <div class="layout-border-h row"></div>

            <div class="g-tab-content" style="height: calc(100% - 200px); font-size: 18px">
<!--                PERSONALLY TAB-->
                <div id="tab-personally" class="g-tab-panel active">
                    <div class="row" style="height: 100%">
                        <div class="col-md-4">
                            <h4 style="text-align: center; text-decoration: underline;">ОБУЧЕНИЕ НАВЫКАМ</h4>
                            <p><a href="#">Урок домоводства</a></p>
                            <p><a href="#">Урок кулинарии</a></p>
                            <p><a href="#">Урок медицины</a></p>
                            <p><a href="#">Делопроизводство</a></p>
                            <p><a href="#">Алхимия</a></p>
                            <p><a href="#">Этикет и риторика</a></p>
                            <p><a href="#">Боевая подготовка</a></p>
                            <p><a href="#">Урок танцев</a></p>
                            <p><a href="#">Гимнастика</a></p>
                            <p><a href="#">Урок вокала</a></p>
                            <p><a href="#">Музыка</a></p>
                            <p><a href="#">Приручение</a></p>
                            <p><a href="#">Дрессировка</a></p>
                            <p><a href="#">Выездка</a></p>
                            <p><a href="#">Упряжка</a></p>
                        </div>
                        <div class="col-md-8" style="overflow-y: scroll; height: 100%">
                            <h4 style="text-align: center; text-decoration: underline;">ОБУЧЕНИЕ СЕКС-ТЕХНИКАМ</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="text-align: center; text-decoration: underline">Петтинг</p>
                                    <p><a href="#">Работа руками</a></p>
                                    <p><a href="#">Работа ногами</a></p>
                                    <p><a href="#">Обжимание</a></p>
                                    <p><a href="#">Пазури</a></p>
                                    <br>
                                    <p style="text-align: center; text-decoration: underline">Оральные ласки</p>
                                    <p><a href="#">Поцелуи</a></p>
                                    <p><a href="#">Вылизывание</a></p>
                                    <p><a href="#">Минет</a></p>
                                    <p><a href="#">Иррумация</a></p>
                                    <p><a href="#">Римминг</a></p>
                                    <br>
                                    <p style="text-align: center; text-decoration: underline">Демонстрация</p>
                                    <p><a href="#">Соблазнение</a></p>
                                    <p><a href="#">Мастурбация</a></p>
                                    <p><a href="#">Дилдо</a></p>
                                    <p><a href="#">Эксгибиционизм</a></p>
                                    <p><a href="#">Унижение</a></p>
                                    <br>
                                    <p style="text-align: center; text-decoration: underline">Пенетрация</p>
                                    <p><a href="#">Секс</a></p>
                                    <p><a href="#">Анальный секс</a></p>
                                    <p><a href="#">Фистинг</a></p>
                                    <p><a href="#">Анальный фистинг</a></p>
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <p style="text-align: center; text-decoration: underline">Групповой секс</p>
                                    <p><a href="#">М+Ж+Ж</a></p>
                                    <p><a href="#">Два ствола</a></p>
                                    <p><a href="#">Три ствола</a></p>
                                    <p><a href="#">Пятерка</a></p>
                                    <p><a href="#">Буккаке</a></p>
                                    <br>
                                    <p style="text-align: center; text-decoration: underline">Фетишизм</p>
                                    <p><a href="#">Клизмы</a></p>
                                    <p><a href="#">Мазохизм</a></p>
                                    <p><a href="#">Самоистязание</a></p>
                                    <p><a href="#">Золотой дождь</a></p>
                                    <p><a href="#">Копрофилия</a></p>
                                    <br>
                                    <p style="text-align: center; text-decoration: underline">Ксенофилия</p>
                                    <p><a href="#">Пес</a></p>
                                    <p><a href="#">Жеребец</a></p>
                                    <p><a href="#">Хряк</a></p>
                                    <p><a href="#">Арахнид</a></p>
                                    <p><a href="#">Исчадие</a></p>
                                    <p><a href="#">Тентакль</a></p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">TEACH INFO TEXT</div>
                    </div>
                </div>
<!--                PERSONALLY TAB/-->
<!--                TUTOR TAB-->
                <div id="tab-tutor" class="g-tab-panel">
                    <div class="row" style="height: 100%">
                        <div class="col-md-4">
                            <h4 style="text-align: center; text-decoration: underline;">ОБУЧЕНИЕ НАВЫКАМ</h4>
                            <p><a href="#">Урок домоводства</a></p>
                            <p><a href="#">Урок кулинарии</a></p>
                            <p><a href="#">Урок медицины</a></p>
                            <p><a href="#">Делопроизводство</a></p>
                            <p><a href="#">Алхимия</a></p>
                            <p><a href="#">Этикет и риторика</a></p>
                            <p><a href="#">Боевая подготовка</a></p>
                            <p><a href="#">Урок танцев</a></p>
                            <p><a href="#">Гимнастика</a></p>
                            <p><a href="#">Урок вокала</a></p>
                            <p><a href="#">Музыка</a></p>
                            <p><a href="#">Приручение</a></p>
                            <p><a href="#">Выездка</a></p>
                        </div>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">TEACH INFO TEXT</div>
                    </div>
                </div>
<!--                TUTOR TAB/-->
<!--                SCHOOL TAB-->
                <div id="tab-school" class="g-tab-panel">
                    <div class="row" style="height: 100%">
                        <div class="col-md-4">
                            <h4 style="text-align: center; text-decoration: underline;">ОБУЧЕНИЕ НАВЫКАМ</h4>
                            <p><a href="#">Урок домоводства</a></p>
                            <p><a href="#">Урок кулинарии</a></p>
                            <p><a href="#">Урок медицины</a></p>
                            <p><a href="#">Делопроизводство</a></p>
                            <p><a href="#">Алхимия</a></p>
                            <p><a href="#">Этикет и риторика</a></p>
                            <p><a href="#">Боевая подготовка</a></p>
                            <p><a href="#">Урок танцев</a></p>
                            <p><a href="#">Гимнастика</a></p>
                            <p><a href="#">Урок вокала</a></p>
                            <p><a href="#">Музыка</a></p>
                            <p><a href="#">Приручение</a></p>
                            <p><a href="#">Выездка</a></p>
                        </div>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">TEACH INFO TEXT</div>
                    </div>
                </div>
<!--                SCHOOL TAB/-->
<!--                ASSISTANT TAB-->
                <div id="tab-assistant" class="g-tab-panel">
                    <div class="row" style="height: 100%">
                        <div class="col-md-4">
                            <h4 style="text-align: center; text-decoration: underline;">ОБУЧЕНИЕ НАВЫКАМ</h4>
                            <p><a href="#">Урок домоводства</a></p>
                            <p><a href="#">Урок кулинарии</a></p>
                            <p><a href="#">Урок медицины</a></p>
                            <p><a href="#">Делопроизводство</a></p>
                            <p><a href="#">Алхимия</a></p>
                            <p><a href="#">Этикет и риторика</a></p>
                            <p><a href="#">Боевая подготовка</a></p>
                            <p><a href="#">Урок танцев</a></p>
                            <p><a href="#">Гимнастика</a></p>
                            <p><a href="#">Урок вокала</a></p>
                            <p><a href="#">Музыка</a></p>
                            <p><a href="#">Приручение</a></p>
                            <p><a href="#">Выездка</a></p>
                        </div>
                    </div>

                    <div class="layout-border-h row"></div>
                    <div class="row g-info-text-panel">
                        <div class="col-md-12">TEACH INFO TEXT</div>
                    </div>
                </div>
<!--                ASSISTANT TAB/-->
            </div>

        </div>
        <div class="layout-border-v"></div>
        <div class="col-md-2 g-info-stats-panel-right">
            <?= $this->renderAjax('_apprentice_skills',['apprentice' => $apprentice]) ?>
        </div>
    </div>
</div>