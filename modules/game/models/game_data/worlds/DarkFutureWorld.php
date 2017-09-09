<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\worlds;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IWorld;
use app\modules\game\models\libraries\WorldLibrary;

class DarkFutureWorld implements IWorld
{
    public function getId()
    {
        return WorldLibrary::DARKFUTURE;
    }

    public function getName()
    {
        return 'Тоталитарный';
    }

    public function getNameAuc()
    {
        return 'тоталитарной страны';
    }

    public function affectJsonData($data)
    {
        $data['seed_pride'] = 1;
        $data['seed_fat'] = 1;
        return ArrayHelper::sumArrays($data,[
            'seed_stamina' => -1,
            'seed_temper' => -3,
            'seed_intellect' => 1,
            'seed_custom' => 2,
            'seed_ego' => -2,
            'seed_sensitivity' => -1,
        ]);
    }

    public function getNameBase()
    {
        return 'euro';
    }

    public function getDescriptions()
    {
        return [
            'В моем мире есть лишь одно достойное государство. 
            Мы живем по заветам Великого Вождя и непрестанно боремся за свободу и братство. 
            Враги пытаются сломить нас и отравить своей пропагандой, но мы твердо знаем что лишь наш народ живет счастливо и свободно. 
            Все необходимое справедливо распределяется по карточкам.',

            'В моем мире есть три государства, но лишь в нашем люди живут организовано и счастливо. 
            Большой Брат всегда следит за нами и помогает не сойти с истинного пути. 
            Министерство Правды объясняет все непонятные вопросы. Нормы еды на человека неуклонно растут, 
            а война вот-вот закончится нашей безоговорочной победой.',

            'Я живу в мире справедливости и равенства. 
            Все носят одинаковую униформу, нет никакого различия между расами и полами. 
            Жилища одинаковые, с прозрачными стенами. Нами правит Благодетель, который всегда избирается единогласно. 
            Чувства находятся под строгим медикаментозным контролем воизбежание страданий.',
        ];
    }
}