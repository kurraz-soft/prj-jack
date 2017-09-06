<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\sub_skills\Copro;
use app\modules\game\models\game_data\skills_sex\sub_skills\Enema;
use app\modules\game\models\game_data\skills_sex\sub_skills\GoldenRain;
use app\modules\game\models\game_data\skills_sex\sub_skills\Mazo;
use app\modules\game\models\game_data\skills_sex\sub_skills\Selfpain;

/**
 * Class FetishFemaleSubSkillList
 * @package app\modules\game\models\game_data\skills_sex
 *
 * @property Enema $enema
 * @property Mazo $mazo
 * @property Selfpain $selfpain
 * @property GoldenRain $goldenRain
 * @property Copro $copro
 */
class FetishFemaleSubSkillList extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'enema' => Enema::class, //Клизма
            'mazo' => Mazo::class,
            'selfpain' => Selfpain::class,
            'goldenRain' => GoldenRain::class,
            'copro' => Copro::class,
        ];
    }
}