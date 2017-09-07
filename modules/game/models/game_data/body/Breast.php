<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;
use app\modules\game\models\game_data\base\INamedValues;

class Breast extends BaseBodyPart implements INamedValues
{
    const VALUE_TO_SIZE = [
        0 => 'A',
        1 => 'B',
        2 => 'C',
        3 => 'D',
        4 => 'E',
        5 => 'F',
        6 => 'G',
        7 => 'H',
    ];

    const MOD_NO = 0;
    const MOD_ENLARGED = 1;
    const MOD_VAGINAS = 2;
    const MOD_MOUTH_NIPPLES = 3;

    /**
     * @var int
     */
    public $value = 0;
    /**
     * @var int
     */
    public $lactation = 0;
    /**
     * @var bool
     */
    public $has_nipples_piercing = false;
    /**
     * @var int
     */
    public $modification = self::MOD_NO;

    public function serializableParams()
    {
        return [
            'value' => '',
            'has_nipples_piercing' => '',
            'modification' => '',
            'lactation' => '',
        ];
    }

    public function getImageId()
    {
        //merging value & nipples_piercing to return right image

        $size = self::VALUE_TO_SIZE[$this->value];
        if($this->has_nipples_piercing)
        {
            $size .= 'P';
        }

        return 'boobs_'.$size;
    }

    public function valueNames()
    {
        return [
            0 => 'Плоская грудь',
            1 => 'Маленькие сисечки',
            2 => 'Небольшая грудь',
            3 => 'Увесистая грудь',
            4 => 'Большая грудь',
            5 => 'Огромные сиськи',
            6 => 'Гигантское вымя',
            7 => 'Свисающая до пола грудь',
        ];
    }

    public function getStatus()
    {
        $ret = $this->valueNames()[$this->value];

        if($this->has_nipples_piercing)
        {
            $ret .= ' c проколотыми сосками';
        }

        return $ret;
    }

    public function getStatusLactation()
    {
        $names = [
            0 => 'Лактация нулевая',
            1 => 'Минимальная лактация',
            2 => 'Лактация',
            3 => 'Хорошая лактация',
            4 => 'Отличная лактация',
            5 => 'Молочная ферма',
        ];

        return $names[$this->lactation];
    }

    public function getStatusModifications()
    {
        $mod_names = [
            static::MOD_NO => 'Модификаций груди нет',
            static::MOD_ENLARGED => 'Грудь увеличена',
            static::MOD_VAGINAS => 'Грудные влагалища',
            static::MOD_MOUTH_NIPPLES => 'Соски-ротики',
        ];

        return $mod_names[$this->modification];
    }
}