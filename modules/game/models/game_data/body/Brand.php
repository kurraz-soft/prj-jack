<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;
use app\modules\game\models\game_data\base\INamedValues;

class Brand extends BaseBodyPart implements INamedValues
{
    const NO = 0;
    const CLAIMED = 1;
    const SLAVE_TATTOO = 2;
    const MAGIC_BRAND = 3;
    const FOREIGN_BRAND = 4;

    public $value = 0;

    public function serializableParams()
    {
        return [
            'value' => '',
        ];
    }

    public function valueNames()
    {
        return [
            0 => 'Нет клейма',
            1 => 'Заклеймена',
            2 => 'Рабская татуировка',
            3 => 'Волшебное клеймо',
            4 => 'Чужое клеймо',
        ];
    }

    public function getStatus()
    {
        return $this->valueNames()[$this->value];
    }

    public function getIco()
    {
        switch ($this->value)
        {
            case static::NO:
                return 'ui/jon-UIadds/info_nobrand.png';
            case static::CLAIMED:
                return 'ui/jon-UIadds/info_brand.png';
            case static::SLAVE_TATTOO:
                return 'ui/jon-UIadds/info_brand_tatoo.png';
            case static::MAGIC_BRAND:
                return 'ui/jon-UIadds/info_brand_magic.png';
            case static::FOREIGN_BRAND:
                return 'ui/jon-UIadds/info_brand_contract.png';
        }
    }
}