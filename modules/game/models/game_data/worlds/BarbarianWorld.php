<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class BarbarianWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::BARBARIAN;
    }

    public function getName()
    {
        return 'Варварский';
    }

    public function getNameAuc()
    {
        return 'варварского мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => 1,
            'seed_temper' => 1,
            'seed_ego' => -1,
            'seed_intellect' => -1,
        ]);
    }

    public function getNameBase()
    {
        return 'barbarian';
    }

    public function getDescriptions()
    {
        return [
            'На моей родине степи простираются без конца и края. 
            Там стада мустангов рассекают волны золотистого ковыля, небо зеленее изумруда, и три прекрасных луны в небе сияют ярко по ночам. 
            Люди часто воюют, ибо великие вожди тем богаче, чем больше добычи они захватят на войне.',

            'На моей родине много лесов, рек и холмов. 
            В лесу не счесть пушного зверя, а озера кишат рыбой. 
            В холмистых долинах &#45; добрые пастбища для овец. 
            Некоторые люди селятся в городах, за высокими стенами, а другие кочуют с места на места, перегоняя огромные стада.',

            'Я родилась на побережье моря, воды которого черны, словно ночь. 
            Ветер неумолчно поет во фьордах, и волны пенятся, разбиваясь о скалы. 
            Там много разных народов, и у каждого своя жизнь. 
            Кто-то ходит под парусом, кто-то пасет кочевые стада, а остальные селятся в укрепленных городах.',
        ];
    }
}