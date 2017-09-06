<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\sub_skills\AFisting;
use app\modules\game\models\game_data\skills_sex\sub_skills\Anal;
use app\modules\game\models\game_data\skills_sex\sub_skills\Fisting;
use app\modules\game\models\game_data\skills_sex\sub_skills\Vaginal;

/**
 * Class PenetrationFemailSkillList
 * @package app\modules\game\models\game_data\skills_sex
 *
 * @property Vaginal $vaginal
 * @property Anal $anal
 * @property Fisting $fisting
 * @property AFisting $aFisting
 */
class PenetrationFemaleSkillList extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'vaginal' => Vaginal::class,
            'anal' => Anal::class,
            'fisting' => Fisting::class,
            'aFisting' => AFisting::class,
        ];
    }
}