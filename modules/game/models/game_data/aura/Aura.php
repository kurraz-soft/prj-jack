<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseGameDataList;

/**
 * Class Aura
 * @package app\modules\game\models\game_data\aura
 */
class Aura extends BaseGameDataList
{
    public $obedience;
    public $lust;
    public $fear;
    public $desperation; //angst
    public $awareness; //rational
    public $taming; //instinct
    public $habit; //custom
    public $corruption; //spoil
    public $loyalty; //moral

    public function serializableParams()
    {
        return [
            'obedience' => Obedience::class,
            'lust' => Lust::class,
            'fear' => Fear::class,
            'desperation' => Desperation::class,
            'awareness' => Awareness::class,
            'taming' => Taming::class,
            'habit' => Habit::class,
            'corruption' => Corruption::class,
            'loyalty' => Loyalty::class,
        ];
    }
}