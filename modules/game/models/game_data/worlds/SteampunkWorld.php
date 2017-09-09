<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class SteampunkWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::STEAMPUNK;
    }

    public function getName()
    {
        return 'Паровых технологий';
    }

    public function getNameAuc()
    {
        return 'мира паровых технологий';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_custom' => 1,
        ]);
    }

    public function getNameBase()
    {
        return 'oldschool';
    }

    public function getDescriptions()
    {
        return [
            'Моим миром правит наука и технология. Есть несколько развитых империй, которые соперничают между собой за влияние в слаборазвитых, но богатых ресурсами колониях. Преимущество сможет получить тот, кто будет иметь больше современных броненосцев, дирижаблей и паротягов.',
            'Наука и техника в моем мире развиты очень высоко. Мы применяем совершенные паровые машины для нужд транспорта и промышленности. Чтобы планировать производство используются мощнейшие арифмометры. Для трансконтинентальных перелетов у нас есть гигантские цеппелины.',
            'В моем мире есть несколько передовых стран, где свершилась промышленная революция. Военная и техническая мощь, зиждется на угле и стали. В деревнях остается все меньше людей, так как молодежь идет на заработки в города. От заводской копоти порой невозможно дышать, а рыба в реках передохла из-за ядовитых стоков.',
        ];
    }
}