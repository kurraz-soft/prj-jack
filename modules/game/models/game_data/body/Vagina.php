<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\attributes\AgeFemale;
use app\modules\game\models\game_data\base\BaseBodyPart;
use app\modules\game\models\game_data\base\INamedValues;
use yii\base\Exception;

class Vagina extends BaseBodyPart implements INamedValues
{
    const MOD_NO = 0;
    const MOD_BALL_IMPLANTS = 1;
    const MOD_LUBRICANT = 2;
    const MOD_TONGUE = 3;
    const MOD_EGG_BIRTH = 4;

    const AGE_TO_STR = [
        AgeFemale::IMMATURE => 'l',
        AgeFemale::YOUNG => 'g',
        AgeFemale::MATURE => 'm',
    ];

    /**
     * @var float
     */
    public $value = 0;
    /**
     * @var bool
     */
    public $is_virgin = true;

    /**
     * @var bool
     */
    public $has_clit_piercing = false;
    public $modification = self::MOD_NO;

    public function serializableParams()
    {
        return [
            'value' => '',
            'has_clit_piercing' => '',
            'modification' => '',
            'is_virgin' => '',
        ];
    }

    public function valueNames()
    {
        return [
            0 => 'Девственное влагалище',
            1 => 'Узкое влагалище',
            2 => 'Упругое влагалище',
            3 => 'Разработанное влагалище',
            4 => 'Рожавшая',
        ];
    }

    public function getImageId()
    {
        //TODO merge with clit_piercing

        /**
         * @var AgeFemale $age
         */
        try
        {
            $age = $this->getDependency(AgeFemale::class);
            $val = static::AGE_TO_STR[$age->value];
        }catch (Exception $e)
        {
            $val = 'l';
        }

        $img_id = 'pussy_' . $val;
        $size = $this->value > 3 ? 3 : $this->value;
        $img_id .= $size;
        return $img_id;
    }

    public function getStatus()
    {
        return $this->valueNames()[(int)floor($this->value)];
    }

    public function getStatusVirginity()
    {
        if($this->is_virgin)
        {
            return $this->value == 0 ? 'Девственная плева' : 'Восстановленная плева';
        }else
        {
            return 'Разорванная плева';
        }
    }

    public function getStatusClit()
    {
        return $this->has_clit_piercing ? 'Клитор проколот' : 'Клитор не проколот';
    }

    public function getStatusModification()
    {
        $mod_names = [
            self::MOD_NO => 'Модификаций влагалища нет',
            self::MOD_BALL_IMPLANTS => 'Шариковые импланты влагалища',
            self::MOD_LUBRICANT => 'Шариковые импланты влагалища',
            self::MOD_TONGUE => 'Влагалищный язычок',
            self::MOD_EGG_BIRTH => 'Яйцерождение',
        ];

        return $mod_names[$this->modification];
    }
}