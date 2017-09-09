<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class ModernWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::MODERN;
    }

    public function getName()
    {
        return 'Экономически развитый';
    }

    public function getNameAuc()
    {
        return 'экономически развитого мира';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            'seed_ego' => 1,
            'seed_pride' => 1,
            'seed_intellect' => 1,
            'seed_stamina' => -1,
        ]);
    }

    public function getNameBase()
    {
        return mt_rand(1,2) == 1 ? 'russian' : 'euro';
    }

    public function getDescriptions()
    {
        return [
            'В моем мире очень много разных стран, но только некоторые из них по настоящему развиты и богаты. В остальных царит нищета и разруха, во многих правят диктаторы. Эти отсталые страны - настоящие рассадники терроризма, и цивилизованным странам приходится иногда применять силу.',
            'У нас есть одна страна, которая богаче и сильнее всех остальных. Но, хотя на нее все равнялись, сейчас там сильный кризис, и от этого страдает экономика во всем мире. Растет безработица, растет инфляция. Люди по всему миру выходят на демонстрации. Во многих странах уже начались гражданские войны.',
            'Когда-то в моем мире было две великие Империи которые боролись между собой за доминирование в мире. Но потом одна из них распалась на части, и теперь почти весь мир принял одну систему ценностей. Скорее всего, со временем границы между государствами исчезнут и мир станет единым.',
        ];
    }
}