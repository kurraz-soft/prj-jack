<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;

class Anus extends BaseBodyPart
{
    public $status;

    public function serializableParams()
    {
        return [
            'status' => '',
        ];
    }
}