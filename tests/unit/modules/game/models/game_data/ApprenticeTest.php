<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data;


use app\modules\game\models\game_data\Apprentice;
use app\modules\game\models\game_data\attributes\HealthFemale;
use app\modules\game\models\game_data\skills\MaidFemale;
use app\modules\game\models\game_data\skills_sex\PettingFemale;
use app\modules\game\models\game_data\skills_sex\PettingFemaleSubSkillList;
use app\modules\game\models\game_data\skills_sex\sub_skills\Hj;
use Codeception\Test\Unit;

class ApprenticeTest extends Unit
{
    public function testUnserializeEmpty()
    {
        $test_data = [];

        $ap = new Apprentice();
        $ap->unserialize($test_data);

        expect($ap->attributes->health)->isInstanceOf(HealthFemale::class);
        expect($ap->skills->maid)->isInstanceOf(MaidFemale::class);
        expect($ap->skillsSex->petting)->isInstanceOf(PettingFemale::class);
        expect($ap->skillsSex->petting->subSkills)->isInstanceOf(PettingFemaleSubSkillList::class);
        expect($ap->skillsSex->petting->subSkills->hj)->isInstanceOf(Hj::class);
    }
}