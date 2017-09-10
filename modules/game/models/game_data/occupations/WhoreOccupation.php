<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class WhoreOccupation implements IOccupation
{
    public function getId()
    {
        return 'whore';
    }

    public function getName()
    {
        return 'уличная шлюха';
    }

    public function getDescriptions()
    {
        return [
            'Когда я подросла, пришлось пойти на панель и торговать своим телом, чтобы не помереть с голоду. Времена были тяжелые, нормальной работы не найти. Клиенты были, в основном, не слишком денежные, а сутенер скотина. Но как-то я выжила. Думала отложить немного денег и начать новую жизнь.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}