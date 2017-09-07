<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseGameDataList;

class ApprenticeBody extends BaseGameDataList
{
    public $breast;
    public $vagina;
    public $anus;
    public $tattoo; //TODO tattoo classes

    public function serializableParams()
    {
        return [
            'breast' => Breast::class,
            'vagina' => Vagina::class,
            'anus' => Anus::class,
        ];
    }
}