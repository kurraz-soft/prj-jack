<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class FreaserOccupation implements IOccupation
{
    public function getId()
    {
        return 'freaser';
    }

    public function getName()
    {
        return 'фрезеровщица';
    }

    public function getDescriptions()
    {
        return [
            'Армии нужны были новые танки, так что даже дети на заводе трудились. Я освоила фрезеровальный станок и была одной из лучших работниц в цеху. Что и говорить, не курорт, но времена были тяжелые, никто не расслаблялся. Если бы не Туманы, я бы, может, сейчас мастером смены была.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}