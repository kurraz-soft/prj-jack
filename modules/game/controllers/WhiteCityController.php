<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\controllers;


use yii\helpers\Url;

class WhiteCityController extends GameController
{
    public function actionIndex()
    {
        $menu = [
            [
                'text' => 'Торговая площадь',
                'url' => Url::to(['trade-square']),
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Гильдия работорговцев',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Колизей',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Центральный форум',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Ватикан',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
        ];

        return $this->render('index', [
            'menu' => $menu,
            'bg' => 'white_city_large.jpg',
        ]);
    }

    public function actionTradeSquare()
    {
        $menu = [
            [
                'text' => 'Рынок рабов',
                'url' => Url::to(['trade-square']),
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => '"Гастрономикон"',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Салон "Elven Laid"',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Бутик Сервилии Квинты',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Сокровищница Азуры',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Арсенал Механтера',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Риэлторская контора',
                'url' => '#',
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
            [
                'text' => 'Покинуть площадь',
                'url' => Url::to(['index']),
                'image' => $this->asset->baseUrl . '/img/ui_overhaul/assistant_assignments.png',
            ],
        ];

        return $this->render('index', [
            'menu' => $menu,
            'bg' => 'market_large.jpg',
        ]);
    }
}