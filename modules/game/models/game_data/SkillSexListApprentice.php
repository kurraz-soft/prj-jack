<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\skills_sex\DemonstrationFemale;
use app\modules\game\models\game_data\skills_sex\FetishFemale;
use app\modules\game\models\game_data\skills_sex\OralFemale;
use app\modules\game\models\game_data\skills_sex\OrgyFemale;
use app\modules\game\models\game_data\skills_sex\PenetrationFemale;
use app\modules\game\models\game_data\skills_sex\PettingFemale;
use app\modules\game\models\game_data\skills_sex\XenophilyFemale;

/**
 * Class SkillSexListApprentice
 * @package app\modules\game\models\game_data
 *
 * @property DemonstrationFemale $demonstration
 * @property FetishFemale $fetish
 * @property OralFemale $oral
 * @property OrgyFemale $orgy
 * @property PenetrationFemale $penetration
 * @property PettingFemale $petting
 * @property XenophilyFemale $xenophily
 */
class SkillSexListApprentice extends BaseGameDataList
{
    public function serializableParams()
    {
        return [
            'demonstration' => DemonstrationFemale::class,
            'fetish' => FetishFemale::class,
            'oral' => OralFemale::class,
            'orgy' => OrgyFemale::class,
            'penetration' => PenetrationFemale::class,
            'petting' => PettingFemale::class,
            'xenophily' => XenophilyFemale::class,
        ];
    }
}