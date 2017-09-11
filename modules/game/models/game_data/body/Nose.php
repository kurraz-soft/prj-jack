<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;

class Nose extends BaseBodyPart
{
    /**
     * @var bool
     */
    public $has_piercing = false;

    public function serializableParams()
    {
        return [
            'has_piercing' => '',
        ];
    }

    public function getStatus()
    {
        return $this->has_piercing ? 'Нос проколот' : 'Нос не проколот';
    }
}