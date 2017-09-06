<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\sub_skills\ALicking;
use app\modules\game\models\game_data\skills_sex\sub_skills\Bj;
use app\modules\game\models\game_data\skills_sex\sub_skills\Dt;
use app\modules\game\models\game_data\skills_sex\sub_skills\Kissing;
use app\modules\game\models\game_data\skills_sex\sub_skills\Licking;

/**
 * Class OralFemaleSubSkillList
 * @package app\modules\game\models\game_data\skills_sex
 *
 * @property Kissing $kissing
 * @property Licking $licking
 * @property Bj $bj
 * @property Dt $dt
 * @property ALicking $aLicking
 */
class OralFemaleSubSkillList extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'kissing' => Kissing::class,
            'licking' => Licking::class,
            'bj' => Bj::class,
            'dt' => Dt::class,
            'aLicking' => ALicking::class,
        ];
    }
}