<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class AnterFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'anter';
    }

    public function getName()
    {
        return 'выросшая в промышленном муравейнике';
    }

    public function getNameAuc()
    {
        return 'выросшая в промышленном муравейнике';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Детство у меня было самое обычное, в школе-муравейнике мы с самых молодых лет обучались трудовой практике и исполняли свой гражданский долг, работая на благо нашей великой страны. В моей субгруппе было двадцать девочек, и я была одной из лучших.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'mind_contol',
'time_plice',
'jailer',
'anter',

        ];
    }
}