<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class MayorFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'mayor';
    }

    public function getName()
    {
        return 'дочь влиятельного политика';
    }

    public function getNameAuc()
    {
        return 'дочь влиятельного политика';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой отец — очень влиятельный человек. Он занимает пост мэра большого города и там ничего не произойдет без его разрешения. У нас в доме всегда бывало много гостей, очень серьезные люди: начальники городских служб, банкиры и промышленники. Честно говоря, они все были ооооочень скучные.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'avanturiste',
'rich_bride',
'rich_bride',
'sufragist',

        ];
    }
}