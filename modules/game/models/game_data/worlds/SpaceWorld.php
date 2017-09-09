<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class SpaceWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::SPACE;
    }

    public function getName()
    {
        return 'Высокоразвитая космическая цивилизация';
    }

    public function getNameAuc()
    {
        return 'высокоразвитой космической цивилизации';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => -1,
            'seed_intellect' => 1,
            'seed_exotic' => RandomHelper::randFloat(0.5, 3.5),
            'seed_ego' => 1,
            'seed_pride' => 1,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'utopia' : 'euro';
    }

    public function getDescriptions()
    {
        return [
            'Вселенная содержит множество обитаемых миров и мы свободно может перемещаться между ними, благодаря гипердрайву. Тысячи планет объединены в Галактическую Республику, управляемую Сенатом. Конечно, у каждого мира свой взгляд на жизнь, и нередки конфликты. Угроза сепаратизма велика как никогда.',
            'Вселенная намного больше, чем один какой-то мир. Наша планета давно уже объединилась в глобальное государство и колонизировала множество миров. Но вселенная безгранична. Мы исследуем её, знакомимся с инопланетными цивилизациями, учимся и развиваемся.',
            'Под сенью Золотого Трона Вечного Императора империя людей процветает в тысячах миров. Но опасности неисчислимы: ксеносы, еретики, кошмарные твари Варпа. Лишь благодаря самоотверженности имперской гвардии, космического десанта, Инквизиции и Экклезиархии мы все еще живы.',
        ];
    }
}