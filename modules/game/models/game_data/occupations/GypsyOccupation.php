<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class GypsyOccupation implements IOccupation
{
    public function getId()
    {
        return 'gypsy';
    }

    public function getName()
    {
        return 'гадалка';
    }

    public function getDescriptions()
    {
        return [
            'Когда я стала старше, то научилась гадать на картах, предсказывать будущее по руке, жонглировать, петь и танцевать. За мои таланты люди платили неплохие деньги, и жизнь в таборе была хоть и не легкой, но все же довольно беззаботной. Мы просто катили вперед по дороге и пели песни...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}