<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseGameDataList;

/**
 * Class FertilityFemale
 * @package app\modules\game\models\game_data\attributes
 *
 * Плодовитость
 * Определяет возможность и вероятность деторождения
 */
class FertilityFemale extends BaseGameDataList
{
    /**
     * @var float
     * Множитель, чем больше тем выше шанс забеременеть
     */
    public $value = 1;
    /**
     * @var bool
     */
    public $revealed = false;

    public function serializableParams()
    {
        return [
            'value' => '',
            'revealed' => '',
        ];
    }
}