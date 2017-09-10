<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class WitchOccupation implements IOccupation
{
    public function getId()
    {
        return 'witch';
    }

    public function getName()
    {
        return 'ведунья';
    }

    public function getDescriptions()
    {
        return [
            'Мои родители умерли рано, и я стала жить у бабушки, в лесном домике. Моя бабушка была ведуньей. Со всех окрестных деревень к ней ходили люди, чтобы приворожить любимого или заговорить хворь. Бабушка и меня учила травам да заклинаниям, тому, как говорить с духами и варить зелья.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}