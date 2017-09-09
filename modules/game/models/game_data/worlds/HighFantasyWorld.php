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

class HighFantasyWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::HIGHFANTASY;
    }

    public function getName()
    {
        return 'Магический';
    }

    public function getNameAuc()
    {
        return 'магического мира';
    }

    public function affectJsonData($data)
    {

        return ArrayHelper::sumArrays($data,[
            'seed_sensitivity' => 1,
            'seed_exotic' => RandomHelper::randFloat(1,3),
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'medieval' : 'fantasy';
    }

    public function getDescriptions()
    {
        return [
            'Моим миром правят могущественные архимаги, которые образуют Великий Конклав и решают на нем судьбы смертных. Но в обычную жизнь они особенно не вмешиваются. Города процветают, хотя, конечно, богатство влечет за собой коррупцию и воровство. А эксперименты колдунов порой оканчиваются серьезными неприятностями.',
            'Мой мир - это арена войны между добром и злом. Союз эльфов, людей и гномов с незапамятных времен противостоит козням Короля-Некроманта, который желает поработить все свободные земли и заселить их своими уродливыми рабами: гоблинами, троллями и драконами.',
            'Наш мир очень велик. О землях за морями я ничего не знаю, но на моей родине когда-то было семь королевств. Теперь они объединены в одну великую Империю. Говорят, что на севере, за Великой Стеной ждет своего часа Древнее Зло. И когда наступит Длинная Зима, Зло проснется и принесет народам Империи неисчислимые беды.',
        ];
    }
}