<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\sub_skills\Fj;
use app\modules\game\models\game_data\skills_sex\sub_skills\Hj;
use app\modules\game\models\game_data\skills_sex\sub_skills\Hugging;
use app\modules\game\models\game_data\skills_sex\sub_skills\Pazuri;

/**
 * Class PettingFemaleSubSkillList
 * @package app\modules\game\models\game_data\skills_sex
 *
 * @property Hj $hj
 * @property Fj $fj
 * @property Hugging $hugging
 * @property Pazuri $pazuri
 */
class PettingFemaleSubSkillList extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'hj' => Hj::class,
            'fj' => Fj::class,
            'hugging' => Hugging::class,
            'pazuri' => Pazuri::class,
        ];
    }
}