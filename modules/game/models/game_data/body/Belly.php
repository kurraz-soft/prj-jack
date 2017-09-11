<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;

class Belly extends BaseBodyPart
{
    /**
     * @var bool
     */
    public $has_navel_piercing = false;

    public function serializableParams()
    {
        return [
            'has_navel_piercing' => '',
        ];
    }

    public function getStatus()
    {
        return $this->has_navel_piercing ? 'Пупок проколот' : 'Пупок не проколот';
    }
}