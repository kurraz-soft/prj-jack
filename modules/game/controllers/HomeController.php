<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\controllers;

use app\modules\game\models\GameMechanics;
use app\modules\game\models\libraries\ApprenticesLibrary;
use yii\helpers\Url;

class HomeController extends GameController
{
    public function actionIndex()
    {
        $menu = [
            [
                'text' => 'Заняться воспитуемой',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/activity.png',
            ],
            [
                'text' => 'Приказы воспитуемой',
                'url' => Url::to(['slave-orders']),
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/slave_assignments.png',
                'children' => [
                    [
                        'text' => 'Иди на занятия',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/activity.png',
                    ],
                    [
                        'text' => 'Сделай зарядку',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/slave_assignments.png',
                    ],
                    [
                        'text' => 'Приберись в доме',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Приготовь ужин',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Вымойся',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Подои исчадие',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Обслужи меня',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Прими наркотик',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Выпей зелье',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                ],
            ],
            [
                'text' => 'Поручения ассисентке',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Бытовые вопросы',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                'children' => [
                    [
                        'text' => 'Помыться',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Приготовить еду',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Прибраться в доме',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Принять химикат',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Выпить зелье',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Бухгалтерия',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                    [
                        'text' => 'Свое дело',
                        'url' => '#',
                        'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
                    ],
                ]
            ],
            [
                'text' => 'Сотворить заклинание',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Выйти из дома',
                'url' => Url::to(GameMechanics::getInstance()->gameRegister->character->home->location_route),
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Закончить день',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
        ];

        return $this->render('index', [
            'menu' => $menu,
            'character' => GameMechanics::getInstance()->gameRegister->character,
        ]);
    }

    public function actionApprenticeScreen()
    {
        $this->is_outside = false;

        return $this->render('apprentice_screen',[
            'character' => GameMechanics::getInstance()->gameRegister->character,
        ]);
    }

    public function actionCharacterScreen()
    {
        $this->is_outside = false;

        return $this->render('character_screen', [
            'character' => GameMechanics::getInstance()->gameRegister->character,
        ]);
    }
}
