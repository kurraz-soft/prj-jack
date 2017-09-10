<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class JailerFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'jailer';
    }

    public function getName()
    {
        return 'дочь тюремщика';
    }

    public function getNameAuc()
    {
        return 'дочь тюремщика';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Я родилась и выросла в гигантском тюремном комплексе. Мой отец работал там охранником, а по закону жилье гражданам предоставляется на рабочем месте. У нашего свободного государства много внутренних врагов, поэтому большие тюрьмы необходимы.',
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