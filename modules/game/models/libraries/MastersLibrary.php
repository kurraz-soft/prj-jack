<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use yii\base\Exception;

class MastersLibrary
{
    static public function loadData()
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/masters.json')), true);
    }

    static public function loadCharacter($character_id)
    {
        $chars_data = self::loadData();

        $char_data = [];
        foreach ($chars_data as $v)
        {
            if($v['id'] == $character_id)
            {
                $char_data = $v;
                break;
            }
        }

        if(!$char_data) throw new Exception('Can\'t find a character');

        return $char_data;
    }
}