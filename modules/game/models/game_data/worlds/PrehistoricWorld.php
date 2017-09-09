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

class PrehistoricWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::PREHISTORIC;
    }

    public function getName()
    {
        return 'Доисторический';
    }

    public function getNameAuc()
    {
        return 'доисторического мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_exotic' => RandomHelper::randFloat(1,2),
            'seed_temper' => 1,
            'seed_ego' => -1,
            'seed_intellect' => -1,
        ]);
    }

    public function getNameBase()
    {
        return 'prehistoric';
    }

    public function getDescriptions()
    {
        return [
            'В моем родном мире повсюду, насколько хватает глаз, простираются дикие леса. Сладкий воздух. Добрая охота. Можно идти много-много дней, но вокруг будут только деревья. Там много добычи, но в лесах водятся страшные звери: саблезубые тигры, пещерные медведи и болотные ящеры.',
            'На моей родине все покрыто снегом и льдом, от горизонта до горизонта. Люди кутаются в шкуры больших животных и разводят в пещерах костры, чтобы согреться. Часто по много дней нет никакой пищи, но когда охотникам удается добыть мамонта, всё племя веселится, и мы наедаемся до отвала.',
            'Там, где я родилась, очень много деревьев с широкими листьями и топких болот, над которыми роится мошкара. В кронах деревьев порхают разноцветные птицы, а на дне мутной реки подстерегают огромные крокодилы. Мы собираем фрукты и охотимся в джунглях, используя отравленные стрелы.',
        ];
    }
}