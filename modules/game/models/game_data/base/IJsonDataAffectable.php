<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface IJsonDataAffectable
{
    /**
     * @param array $data
     * @return array
     */
    public function affectJsonData($data);
}