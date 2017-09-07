<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;

class Breast extends BaseBodyPart
{
    public $status;

    public $lactation; //TODO
    public $nipples_piercing; //TODO
    public $modifications; //TODO

    public function serializableParams()
    {
        return [
            'status' => '',
        ];
    }
}