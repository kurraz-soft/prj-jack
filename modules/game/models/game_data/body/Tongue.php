<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;

class Tongue extends BaseBodyPart
{
    /**
     * @var bool
     */
    public $has_piercing = false;

    /**
     * @var bool
     */
    public $splitted = false;

    public function serializableParams()
    {
        return [
            'has_piercing' => '',
            'splitted' => '',
        ];
    }

    public function getStatus()
    {
        return $this->has_piercing ? 'Язык проколот' : 'Язык не проколот';
    }

    public function getStatusSplit()
    {
        return $this->has_piercing ? 'Язык разделен' : 'Язык не разделен';
    }
}