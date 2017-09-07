<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;

class Vagina extends BaseBodyPart
{
    public $status;

    public $clit_piercing; //TODO
    public $modifications; //TODO

    public function serializableParams()
    {
        return [
            'status' => '',
        ];
    }
}