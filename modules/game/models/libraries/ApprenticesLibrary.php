<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use app\modules\game\helpers\RandomHelper;
use app\modules\game\helpers\VarHelper;
use app\modules\game\models\game_data\Apprentice;
use app\modules\game\models\game_data\attributes\AgeFemale;
use app\modules\game\models\game_data\body\Mind;
use app\modules\game\models\game_data\traits\AbuseAttitude;
use app\modules\game\models\game_data\traits\BloodAttitude;
use app\modules\game\models\game_data\traits\Bruises;
use app\modules\game\models\game_data\traits\Compassion;
use app\modules\game\models\game_data\traits\CookAffinity;
use app\modules\game\models\game_data\traits\Courage;
use app\modules\game\models\game_data\traits\DanceAffinity;
use app\modules\game\models\game_data\traits\DressageAffinity;
use app\modules\game\models\game_data\traits\EnchanterAffinity;
use app\modules\game\models\game_data\traits\Exhibitionism;
use app\modules\game\models\game_data\traits\ExpressionAffinity;
use app\modules\game\models\game_data\traits\GladiatorAffinity;
use app\modules\game\models\game_data\traits\Grace;
use app\modules\game\models\game_data\traits\Homosexualism;
use app\modules\game\models\game_data\traits\Illness;
use app\modules\game\models\game_data\traits\Masohism;
use app\modules\game\models\game_data\traits\Meekness;
use app\modules\game\models\game_data\traits\Memory;
use app\modules\game\models\game_data\traits\MusicAffinity;
use app\modules\game\models\game_data\traits\NurseAffinity;
use app\modules\game\models\game_data\traits\Nymphomania;
use app\modules\game\models\game_data\traits\Parasite;
use app\modules\game\models\game_data\traits\PassionSweets;
use app\modules\game\models\game_data\traits\Perversion;
use app\modules\game\models\game_data\traits\PetAffinity;
use app\modules\game\models\game_data\traits\Scars;
use app\modules\game\models\game_data\traits\SecretaryAffinity;
use app\modules\game\models\game_data\traits\Selfesteem;
use app\modules\game\models\game_data\traits\ServiceAffinity;
use app\modules\game\models\game_data\traits\SportAffinity;
use app\modules\game\models\game_data\traits\VocalAffinity;
use app\modules\game\models\game_data\traits\Voice;

class ApprenticesLibrary
{
    /**
     * @param $file_id
     * @return array
     */
    public static function load($file_id)
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/apprentices/'.$file_id.'.json')), true);
    }

    /**
     * @param bool $with_special
     * @return array
     */
    public static function findAll($with_special = false)
    {
        $dir = opendir(\Yii::getAlias('@game/data/apprentices'));
        $file_ids = [];
        while(($file = readdir($dir)) !== false)
        {
            list($filename, $ext) = explode('.',$file);
            if($ext == 'json' && ($with_special || (strpos($filename,'_') === false)))
                $file_ids[] = $filename;
        }

        return $file_ids;
    }

    /**
     * @return string
     */
    public static function getRandomFileId()
    {
        $file_ids = static::findAll();

        return $file_ids[array_rand($file_ids)];
    }

    /**
     * @param $data
     * @return array
     */
    public static function fillUpLoadedData($data)
    {
        $age_assoc = [
            0 => AgeFemale::YOUNG,
            1 => AgeFemale::LOLI,
            2 => AgeFemale::MATURE,
        ];
        /*$age_assoc = [
            AgeFemale::YOUNG => 0,
            AgeFemale::LOLI => 1,
            AgeFemale::MATURE => 2,
        ];*/

        $data['seed_world'] = VarHelper::existOrElse($data, 'seed_world', WorldLibrary::getRandomWorldId());
        $world = WorldLibrary::factory($data['seed_world']);
        $data['seed_family'] = VarHelper::existOrElse($data, 'seed_family', RandomHelper::randArrayValue($world->getAvailableFamilyOriginIds()));
        $family = FamilyOriginLibrary::factory($data['seed_family']);
        $data['seed_occupation'] = VarHelper::existOrElse($data, 'seed_occupation', RandomHelper::randArrayValue($family->getAvailableOccupations()));
        $occupation = OccupationsLibrary::factory($data['seed_occupation']);

        $data['seed_name'] = VarHelper::existOrElse($data, 'seed_name', NamesLibrary::getRandom($world->getNameBase()));
        $data['seed_age'] = VarHelper::existOrElse($data, 'seed_age', mt_rand(0,2));
        $data['seed_beauty'] = VarHelper::existOrElse($data, 'seed_beauty', mt_rand(1, 5));
        $data['seed_sensitivity'] = VarHelper::existOrElse($data, 'seed_sensitivity', mt_rand(1,5));
        $data['seed_temper'] = VarHelper::existOrElse($data, 'seed_temper', mt_rand(1,5));
        $data['seed_ego'] = VarHelper::existOrElse($data, 'seed_ego', mt_rand(1,5));
        $data['seed_pride'] = VarHelper::existOrElse($data, 'seed_pride', mt_rand(1,5));
        $data['seed_intellect'] = VarHelper::existOrElse($data, 'seed_intellect', mt_rand(1,5));
        $data['seed_fat'] = VarHelper::existOrElse($data, 'seed_fat', mt_rand(0,4));
        $data['seed_exotic'] = VarHelper::existOrElse($data, 'seed_exotic', mt_rand(1,5));
        $data['seed_fame_rate'] = VarHelper::existOrElse($data, 'seed_fame_rate', mt_rand(1,5));
        $data['seed_fertility'] = $age_assoc[$data['seed_age']] == AgeFemale::LOLI? 0 : RandomHelper::randFloat(1,2);
        $data['seed_fertility_revealed'] = 0;
        $data['seed_stamina'] = VarHelper::existOrElse($data, 'seed_stamina', mt_rand(1,5));
        //$data['seed_metabolism'] = VarHelper::existOrElse($data, 'seed_metabolism', 3);

        //Aura
        $data['seed_custom'] = VarHelper::existOrElse($data, 'seed_custom', 0);
        $data['seed_moral'] = VarHelper::existOrElse($data,'seed_moral', 0);
        $data['seed_instinct'] = VarHelper::existOrElse($data,'seed_instinct', 0);
        $data['seed_awareness'] = VarHelper::existOrElse($data,'seed_awareness', 0);
        $data['seed_obedience'] = VarHelper::existOrElse($data,'seed_obedience', 0);
        $data['seed_lust'] = VarHelper::existOrElse($data,'seed_lust', 0);
        $data['seed_fear'] = VarHelper::existOrElse($data,'seed_fear', 0);
        $data['seed_angst'] = VarHelper::existOrElse($data,'seed_angst', 0);
        $data['seed_spoil'] = VarHelper::existOrElse($data,'seed_spoil', 0);

        //Skills
        $data['seed_expression'] = VarHelper::existOrElse($data,'seed_expression', 0);
        $data['seed_pet'] = VarHelper::existOrElse($data,'seed_pet', 0);
        $data['seed_dressage'] = VarHelper::existOrElse($data,'seed_dressage', 0);
        $data['seed_nurse'] = VarHelper::existOrElse($data,'seed_nurse', 0);
        $data['seed_service'] = VarHelper::existOrElse($data,'seed_service', 0);
        $data['seed_cook'] = VarHelper::existOrElse($data,'seed_cook', 0);
        $data['seed_gladiatrix'] = VarHelper::existOrElse($data,'seed_gladiatrix', 0);
        $data['seed_enchanter'] = VarHelper::existOrElse($data,'seed_enchanter', 0);
        $data['seed_vocal'] = VarHelper::existOrElse($data,'seed_vocal', 0);
        $data['seed_music'] = VarHelper::existOrElse($data,'seed_music', 0);
        $data['seed_callisthenics'] = VarHelper::existOrElse($data,'seed_callisthenics', 0);
        $data['seed_secretary'] = VarHelper::existOrElse($data,'seed_secretary', 0);

        //Body
        $data['seed_boobs'] = VarHelper::existOrElse($data,'seed_boobs', mt_rand(0, 4));
        $data['seed_virginity'] = VarHelper::existOrElse($data,'virginity', '');

        //SkillsSex
        //init vars if they wasn't initialized
        $data['seed_sub_hj'] = $data['seed_sub_hj'] ?? 0;
        $data['seed_sub_fj'] = $data['seed_sub_fj'] ?? 0;
        $data['seed_sub_hug'] = $data['seed_sub_hug'] ?? 0;
        $data['seed_sub_pazuri'] = $data['seed_sub_pazuri'] ?? 0;
        $data['seed_sub_kiss'] = $data['seed_sub_kiss'] ?? 0;
        $data['seed_sub_thongue'] = $data['seed_sub_thongue'] ?? 0;
        $data['seed_sub_bj'] = $data['seed_sub_bj'] ?? 0;
        $data['seed_sub_dt'] = $data['seed_sub_dt'] ?? 0;
        $data['seed_sub_asslik'] = $data['seed_sub_asslik'] ?? 0;
        $data['seed_sub_vaginal'] = $data['seed_sub_vaginal'] ?? 0;
        $data['seed_sub_anal'] = $data['seed_sub_anal'] ?? 0;
        $data['seed_sub_anal_stretch'] = $data['seed_sub_anal_stretch'] ?? 0;
        $data['seed_sub_fisting'] = $data['seed_sub_fisting'] ?? 0;
        $data['seed_anal_stretch'] = $data['seed_anal_stretch'] ?? 0;
        $data['seed_sub_seduce'] = $data['seed_sub_seduce'] ?? 0;
        $data['seed_sub_masturbation'] = $data['seed_sub_masturbation'] ?? 0;
        $data['seed_sub_dildo'] = $data['seed_sub_dildo'] ?? 0;
        $data['seed_sub_exhibit'] = $data['seed_sub_exhibit'] ?? 0;
        $data['seed_sub_humiliation'] = $data['seed_sub_humiliation'] ?? 0;
        $data['seed_sub_enema'] = $data['seed_sub_enema'] ?? 0;
        $data['seed_sub_mazo'] = $data['seed_sub_mazo'] ?? 0;
        $data['seed_sub_selfpain'] = $data['seed_sub_selfpain'] ?? 0;
        $data['seed_sub_piss'] = $data['seed_sub_piss'] ?? 0;
        $data['seed_sub_kopro'] = $data['seed_sub_kopro'] ?? 0;
        $data['seed_sub_threesome'] = $data['seed_sub_threesome'] ?? 0;
        $data['seed_sub_dp'] = $data['seed_sub_dp'] ?? 0;
        $data['seed_sub_tp'] = $data['seed_sub_tp'] ?? 0;
        $data['seed_sub_gangbang'] = $data['seed_sub_gangbang'] ?? 0;
        $data['seed_sub_bukake'] = $data['seed_sub_bukake'] ?? 0;
        $data['seed_sub_zoosex'] = $data['seed_sub_zoosex'] ?? 0;
        $data['seed_sub_bestiality'] = $data['seed_sub_bestiality'] ?? 0;
        $data['seed_sub_horse'] = $data['seed_sub_horse'] ?? 0;
        $data['seed_sub_tentacles'] = $data['seed_sub_tentacles'] ?? 0; // or seed_sub_polypusvermin
        $data['seed_sub_arachnidSpider'] = $data['seed_sub_arachnidSpider'] ?? 0;

        //Virginity
        if(!VarHelper::exist($data, 'seed_virginity'))
        {
            if(!$data['seed_virginity'] && $age_assoc[$data['seed_age']] == AgeFemale::LOLI)
            {
                $data['seed_virginity'] = RandomHelper::randChooseVar(0,1, 80);
            }
            if(!$data['seed_virginity'] && $age_assoc[$data['seed_age']] == AgeFemale::YOUNG)
            {
                $data['seed_virginity'] = RandomHelper::randChooseVar(0,1, 50);
            }
            if(!$data['seed_virginity'] && $age_assoc[$data['seed_age']] == AgeFemale::MATURE)
            {
                $data['seed_virginity'] = RandomHelper::randChooseVar(0,1, 20);
            }
        }

        if($age_assoc[$data['seed_age']] == AgeFemale::YOUNG)
        {
            $bonus = RandomHelper::randChooseVar(1, 0, 25);
            $data['seed_sub_anal'] = VarHelper::existOrElse($data, 'seed_sub_anal', 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 33);
            $data['seed_sub_bj'] = VarHelper::existOrElse($data, 'seed_sub_bj', 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 50);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data, 'seed_sub_masturbation', 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 33);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data, 'seed_sub_masturbation', 0) + $bonus;

            if(RandomHelper::randChooseVar(1,0,25))
            {
                $data['seed_virginity'] = 1;
                $data['seed_sub_hug'] += 1;
                $data['seed_sub_kiss'] += 1;
                $data['seed_sub_vaginal'] += 1;
                $data['seed_sub_anal'] += RandomHelper::randChooseVar(1, 0, 33);
                $data['seed_sub_bj'] += RandomHelper::randChooseVar(1, 0, 33);
            }
        }

        if($age_assoc[$data['seed_age']] == AgeFemale::MATURE)
        {
            $bonus = 1;
            $data['seed_sub_hug'] = VarHelper::existOrElse($data, 'seed_sub_hug', 0) + $bonus;

            $bonus = 1;
            $data['seed_sub_kiss'] = VarHelper::existOrElse($data, 'seed_sub_kiss', 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 50);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data, 'seed_sub_masturbation', 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 33);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data, 'seed_sub_masturbation', 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 25);
            $data['seed_sub_masturbation'] = VarHelper::existOrElse($data, 'seed_sub_masturbation', 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 25);
            $data['seed_sub_anal'] = VarHelper::existOrElse($data, 'seed_sub_anal', 0) + $bonus;

            $bonus = RandomHelper::randChooseVar(1, 0, 33);
            $data['seed_sub_bj'] = VarHelper::existOrElse($data, 'seed_sub_bj', 0) + $bonus;

            if(RandomHelper::randChooseVar(1,0,75))
            {
                $data['seed_virginity'] = 1;

                $bonus = 1;
                $data['seed_sub_hug'] = VarHelper::existOrElse($data, 'seed_sub_hug', 0) + $bonus;

                $bonus = 1;
                $data['seed_sub_kiss'] = VarHelper::existOrElse($data, 'seed_sub_kiss', 0) + $bonus;

                $bonus = 1;
                $data['seed_sub_seduce'] = VarHelper::existOrElse($data, 'seed_sub_seduce', 0) + $bonus;

                $bonus = 2;
                $data['seed_sub_vaginal'] = VarHelper::existOrElse($data, 'seed_sub_vaginal', 0) + $bonus;

                $data['seed_sub_anal'] += RandomHelper::randChooseVar(1, 0, 33);
                $data['seed_sub_anal'] += RandomHelper::randChooseVar(1, 0, 25);
                $data['seed_sub_bj'] += RandomHelper::randChooseVar(1, 0, 50);
                $data['seed_sub_bj'] += RandomHelper::randChooseVar(1, 0, 33);
            }
        }

        //Origin affects
        $data = $world->affectJsonData($data);
        $data = $family->affectJsonData($data);
        $data = $occupation->affectJsonData($data);

        //Additional attribute randomizer
        $a = 0;
        if($age_assoc[$data['seed_age']] == AgeFemale::LOLI) $a = 15;
        if($age_assoc[$data['seed_age']] == AgeFemale::YOUNG) $a = 10;
        if($age_assoc[$data['seed_age']] == AgeFemale::MATURE) $a = 8;

        $b = mt_rand(1, $a);
        if(mt_rand(1, $a) == $b) $data['seed_beauty'] += mt_rand(-2,2);
        if(mt_rand(1, $a) == $b) $data['seed_stamina'] += mt_rand(-2,2);
        if(mt_rand(1, $a) == $b) $data['seed_sensitivity'] += mt_rand(-2,2);
        if(mt_rand(1, $a) == $b) $data['seed_temper'] += mt_rand(-2,2);
        if(mt_rand(1, $a) == $b) $data['seed_ego'] += mt_rand(-2,2);
        if(mt_rand(1, $a) == $b) $data['seed_pride'] += mt_rand(-2,2);
        if(mt_rand(1, $a) == $b) $data['seed_intellect'] += mt_rand(-2,2);
        if(mt_rand(1, $a) == $b) $data['seed_exotic'] += RandomHelper::randFloat(-2,2);
        if(mt_rand(1, $a) == $b) $data['seed_fame_rate'] += RandomHelper::randFloat(0.1,2.5);

        $b = mt_rand(1, $a);
        if(mt_rand(1, $a) == $b) $data['seed_service'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_expression'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_secretary'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_callisthenics'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_gladiatrix'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_cook'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_dressage'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_pet'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_nurse'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_enchanter'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_vocal'] += mt_rand(1,4);
        if(mt_rand(1, $a) == $b) $data['seed_music'] += mt_rand(1,4);

        $b = mt_rand(1, $a);
        if(mt_rand(1, $a) == $b) $data['seed_sub_vaginal'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_fisting'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_threesome'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_dp'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_tp'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_gangbang'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_zoosex'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_bestiality'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_horse'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_tentacles'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_arachnidSpider'] += mt_rand(1,3);
        //if(mt_rand(1, $a) == $b) $data['seed_sub_polypusvermin'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_hug'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_kiss'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_bj'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_vaginal'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_anal'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_exhibit'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_humiliation'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_hj'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_fj'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_pazuri'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_thongue'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_dt'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_asslik'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_anal_stretch'] += $data['seed_sub_anal'];
        if(mt_rand(1, $a) == $b) $data['seed_sub_seduce'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_masturbation'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_dildo'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_enema'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_mazo'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_selfpain'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_piss'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_kopro'] += mt_rand(1,3);
        if(mt_rand(1, $a) == $b) $data['seed_sub_bukake'] += mt_rand(1,3);

        //Piercings

        //init
        $data['seed_niple_piercing'] = $data['seed_niple_piercing'] ?? 0;
        $data['seed_clit_piercing'] = $data['seed_clit_piercing'] ?? 0;
        $data['seed_ear_piercing'] = $data['seed_ear_piercing'] ?? 0;
        $data['seed_thongue_piercing'] = $data['seed_thongue_piercing'] ?? 0;
        $data['seed_belly_piercing'] = $data['seed_belly_piercing'] ?? 0;
        $data['seed_nosdril_piercing'] = $data['seed_nosdril_piercing'] ?? 0;
        $data['seed_nose_piercing'] = $data['seed_nose_piercing'] ?? 0;
        $data['seed_thongue_split'] = $data['seed_thongue_split'] ?? 0;
        $data['seed_scarification'] = $data['seed_scarification'] ?? 0;

        if($age_assoc[$data['seed_age']] != AgeFemale::LOLI)
        {
            $b = mt_rand(1, $a);
            if(mt_rand(1, $a) == $b) $data['seed_niple_piercing'] = 1;
            if(mt_rand(1, $a) == $b) $data['seed_clit_piercing'] = 1;
            if(mt_rand(1, $a) == $b) $data['seed_ear_piercing'] = 1;
            if(mt_rand(1, $a) == $b) $data['seed_ear_piercing'] = 1;
            if(mt_rand(1, $a) == $b) $data['seed_thongue_piercing'] = 1;
            if(mt_rand(1, $a) == $b) $data['seed_belly_piercing'] = 1;
            if(mt_rand(1, $a) == $b) $data['seed_nosdril_piercing'] = 1;
            if(mt_rand(1, $a) == $b) $data['seed_nose_piercing'] = 1;
            if(mt_rand(1, 20) == 3) $data['seed_thongue_split'] = 1;
            if(mt_rand(1, 20) == 3) $data['seed_scarification'] = 1;
        }

        //Makeup and Tattoos
        if($age_assoc[$data['seed_age']] != AgeFemale::LOLI)
        {
            $b = mt_rand(1, $a);
            if(mt_rand(1, $a) == $b) $data['seed_makeup'] = 3;
            if(mt_rand(1, $a) == $b) $data['seed_fiend_tattoo'] = 1;
            if(mt_rand(1, $a) == $b) $data['seed_tatoo'] = mt_rand(1,5);
            if(mt_rand(1, 15) == 3) $data['seed_fertility'] = -1;
        }

        ////Traits

        //Illness
        $data['seed_ill'] = RandomHelper::randChooseVar(1, 0, 20);
        //Parasite
        if(!VarHelper::exist($data, 'seed_parasite'))
        {
            if(mt_rand(1, 8) == 4)
            {
                $data['seed_parasite'] = mt_rand(1,5);
            }else
            {
                $data['seed_parasite'] = 0;
            }
        }
        //Pregnancy
        if(!VarHelper::exist($data, 'seed_pregnant'))
        {
            $data['seed_pregnant'] = 0;
            if ($data['seed_virginity'] > 0 && $data['seed_fertility'] == 0 && $data['seed_parasite'] == 0)
            {
                if (mt_rand(1, 12) == 6)
                {
                    $data['seed_pregnant'] = mt_rand(1,30);
                }
            }
        }
        //Wounds
        if(!VarHelper::exist($data, 'seed_wounds'))
        {
            $data['seed_wounds'] = 0;
            if(mt_rand(1,15) == 8)
            {
                $data['seed_wounds'] = mt_rand(1,5);
            }
        }
        //Scars
        if(!VarHelper::exist($data, 'seed_scares'))
        {
            $data['seed_scares'] = 0;
            if(mt_rand(1,8) == 4)
            {
                $data['seed_scares'] = RandomHelper::randByWeights([
                    1 => 5,
                    2 => 4,
                    3 => 3,
                    4 => 3,
                    5 => 3,
                ]);
            }
        }
        //Bruises
        if(!VarHelper::exist($data, 'seed_bruises'))
        {
            $data['seed_scares'] = 0;
            if(mt_rand(1,5) == 4)
            {
                $data['seed_scares'] = RandomHelper::randByWeights([
                    1 => 5,
                    2 => 4,
                    3 => 3,
                    4 => 3,
                    5 => 3,
                ]);
            }
        }
        //nymphomania
        if(!VarHelper::exist($data, 'seed_nymphomania'))
        {
            $data['seed_scares'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_scares'] = RandomHelper::randChooseVar(1,0,33);
            }
        }
        //masohism
        if(!VarHelper::exist($data, 'seed_masohism'))
        {
            $data['seed_masohism'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_masohism'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //exhibitionism
        if(!VarHelper::exist($data, 'seed_exhibitionism'))
        {
            $data['seed_exhibitionism'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_exhibitionism'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //preversion
        if(!VarHelper::exist($data, 'seed_preversion'))
        {
            $data['seed_preversion'] = 0;
            if(mt_rand(1,12) == 10)
            {
                $data['seed_preversion'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //homosexualism
        if(!VarHelper::exist($data, 'seed_homosexualism'))
        {
            $data['seed_preversion'] = 0;
            if(mt_rand(1,15) == 10)
            {
                $data['seed_preversion'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //abuse_attitude
        if(!VarHelper::exist($data, 'seed_abuse_attitude'))
        {
            $data['seed_abuse_attitude'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_abuse_attitude'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //darkness_attitude
        if(!VarHelper::exist($data, 'seed_darkness_attitude'))
        {
            $data['seed_darkness_attitude'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_darkness_attitude'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //blood_attitude
        if(!VarHelper::exist($data, 'seed_blood_attitude'))
        {
            $data['seed_blood_attitude'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_blood_attitude'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //fire_attitude
        if(!VarHelper::exist($data, 'seed_fire_attitude'))
        {
            $data['seed_fire_attitude'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_fire_attitude'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //water_attitude
        if(!VarHelper::exist($data, 'seed_water_attitude'))
        {
            $data['seed_water_attitude'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_water_attitude'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //vermin_attitude
        if(!VarHelper::exist($data, 'seed_vermin_attitude'))
        {
            $data['seed_vermin_attitude'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_vermin_attitude'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //deprivation_attitude
        if(!VarHelper::exist($data, 'seed_deprivation_attitude'))
        {
            $data['seed_deprivation_attitude'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_deprivation_attitude'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //passion_comfort
        if(!VarHelper::exist($data, 'seed_passion_comfort'))
        {
            $data['seed_passion_comfort'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_passion_comfort'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //passion_luxury
        if(!VarHelper::exist($data, 'seed_passion_luxury'))
        {
            $data['seed_passion_luxury'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_passion_luxury'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //passion_sweets
        if(!VarHelper::exist($data, 'seed_passion_sweets'))
        {
            $data['seed_passion_sweets'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_passion_sweets'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //passion_fame
        if(!VarHelper::exist($data, 'seed_passion_fame'))
        {
            $data['seed_passion_fame'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_passion_fame'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //courage
        if(!VarHelper::exist($data, 'seed_courage'))
        {
            $data['seed_courage'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_courage'] = RandomHelper::randChooseVar(1,0,50);
            }
        }
        //metabolism
        if(!VarHelper::exist($data, 'seed_metabolism'))
        {
            $data['seed_metabolism'] = 3;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_metabolism'] = mt_rand(1,5);
            }
        }
        //grace
        if(!VarHelper::exist($data, 'seed_grace'))
        {
            $data['seed_grace'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_grace'] = RandomHelper::randChooseVar(1,0,33);
            }
        }
        //sport_affinity
        if(!VarHelper::exist($data, 'seed_sport_affinity'))
        {
            $data['seed_sport_affinity'] = 0;
            if(mt_rand(1,20) == 10)
            {
                $data['seed_sport_affinity'] = RandomHelper::randChooseVar(1,0,33);
            }
        }
        $data['seed_expression_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_pet_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_dressage_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_nurse_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_service_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_cook_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_gladiatrix_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_enchanter_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_vocal_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_music_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_callisthenics_affinity'] = RandomHelper::randChooseVar(1,0, 5);
        $data['seed_secretary_affinity'] = RandomHelper::randChooseVar(1,0, 5);

        if(!VarHelper::exist($data, 'seed_meekness'))
        {
            $data['seed_meekness'] = 0;
            if(mt_rand(1, 20) == 10)
            {
                $data['seed_meekness'] = RandomHelper::randChooseVar(1, 0, 60);
            }
        }
        if(!VarHelper::exist($data, 'seed_selfesteem'))
        {
            $data['seed_selfesteem'] = 0;
            if(mt_rand(1, 20) == 10)
            {
                $data['seed_selfesteem'] = RandomHelper::randChooseVar(1, 0, 33);
            }
        }
        if(!VarHelper::exist($data, 'seed_voice'))
        {
            $data['seed_voice'] = 0;
            if(mt_rand(1, 20) == 10)
            {
                $data['seed_voice'] = RandomHelper::randChooseVar(1, 0, 33);
            }
        }
        if(!VarHelper::exist($data, 'seed_compassion'))
        {
            $data['seed_compassion'] = 0;
            if(mt_rand(1, 20) == 10)
            {
                $data['seed_compassion'] = RandomHelper::randChooseVar(1, 0, 50);
            }
        }

        $data['seed_energy'] = VarHelper::existOrElse($data, 'seed_energy', mt_rand(0,3));
        $data['seed_hygiene'] = VarHelper::existOrElse($data, 'seed_energy', mt_rand(0,4));
        $data['seed_exotic'] = (int)$data['seed_exotic']; //normalize

        if($data['seed_virginity'] <= 0)
        {
            $data['seed_ill'] = 0;
            $data['seed_parasite'] = 0;
            $data['seed_pregnant'] = 0;
            $data['seed_sub_vaginal'] = 0;
            $data['seed_sub_vaginal_xp'] = 0;
            $data['seed_sub_fisting'] = 0;
            $data['seed_sub_fisting_xp'] = 0;
            $data['seed_sub_threesome'] = 0;
            $data['seed_sub_threesome_xp'] = 0;
            $data['seed_sub_dp'] = 0;
            $data['seed_sub_dp_xp'] = 0;
            $data['seed_sub_tp'] = 0;
            $data['seed_sub_tp_xp'] = 0;
            $data['seed_sub_gangbang'] = 0;
            $data['seed_sub_gangbang_xp'] = 0;
            $data['seed_sub_bukake'] = 0;
            $data['seed_sub_bukake_xp'] = 0;
            $data['seed_sub_anal'] = 0;
            $data['seed_sub_anal_xp'] = 0;
            $data['seed_anal_stretch'] = 0;
            $data['seed_sub_zoosex'] = 0;
            $data['seed_sub_zoosex_xp'] = 0;
            $data['seed_sub_bestiality'] = 0;
            $data['seed_sub_bestiality_xp'] = 0;
            $data['seed_sub_horse'] = 0;
            $data['seed_sub_horse_xp'] = 0;
            $data['seed_sub_tentacles'] = 0;
            $data['seed_sub_tentacles_xp'] = 0;
            $data['seed_sub_arachnidspider'] = 0;
            $data['seed_sub_arachnidspider_xp'] = 0;
            $data['seed_sub_polypusvermin'] = 0;
            $data['seed_sub_polypusvermin_xp'] = 0;
        }

        //Makes it harder to train in both gladiatrix and pet or pony since they use opposing skills
        if($data['seed_gladiatrix'] > 2)
        {
            $data['seed_pet'] = 0;
            $data['seed_dressage'] = 0;
        }
        if($data['seed_pet'] > 2 || $data['seed_dressage'] > 2)
        {
            $data['seed_gladiatrix'] = 0;
        }
        if($data['seed_gladiatrix_affinity'])
        {
            $data['seed_pet_affinity'] = 0;
            $data['seed_dressage_affinity'] = 0;
        }
        if($data['seed_pet_affinity'] || $data['seed_dressage_affinity'])
        {
            $data['seed_gladiatrix_affinity'] = 0;
        }

        if($data['seed_stamina'] >= 5) $data['seed_metabolism'] += 1;
        if($data['seed_stamina'] == 1) $data['seed_metabolism'] -= 1;
        if($data['seed_energy'] > $data['seed_stamina']) $data['seed_energy'] = $data['seed_stamina'];
        $data['seed_base_exotic'] = $data['seed_exotic']; //??

        //Added code to avoid having slaves with all bottomed out stats
        if(($data['seed_stamina'] + $data['seed_beauty'] + $data['seed_sensitivity']
            + $data['seed_intellect'] + $data['seed_temper'] + $data['seed_ego']) < 7)
        {
            if($data['seed_stamina'] <= 1) $data['seed_stamina'] += mt_rand(0,2);
            if($data['seed_beauty'] <= 1) $data['seed_beauty'] += mt_rand(0,2);
            if($data['seed_sensitivity'] <= 1) $data['seed_sensitivity'] += mt_rand(0,2);
            if($data['seed_intellect'] <= 1) $data['seed_intellect'] += mt_rand(0,2);
            if($data['seed_temper'] <= 1) $data['seed_temper'] += mt_rand(0,2);
            if($data['seed_ego'] <= 1) $data['seed_ego'] += mt_rand(0,2);
        }

        //Psy determination
        if(!VarHelper::exist($data, 'seed_psy_basic'))
        {
            $data['seed_psy_basic'] = RandomHelper::randArrayValue([
                Mind::STATE_RELUCTANT,
                Mind::STATE_SOFT,
                Mind::STATE_OPTIMISTIC,
            ]);
            if($data['seed_sensitivity'] >= 4) $data['seed_psy_basic'] = Mind::STATE_LACHRYMOSE;
            if(($data['seed_ego'] + $data['seed_temper'] + $data['seed_pride']) > 10)
            {
                if($data['seed_ego'] >= 4) $data['seed_psy_basic'] = Mind::STATE_RESISTANT;
                if($data['seed_temper'] >= 4) $data['seed_psy_basic'] = Mind::STATE_HATEFUL;
                if($data['seed_pride'] >= 4) $data['seed_psy_basic'] = Mind::STATE_ARROGANT;
            }
            if($data['seed_ego'] >= 5) $data['seed_psy_basic'] = Mind::STATE_RESISTANT;
            if($data['seed_temper'] >= 5) $data['seed_psy_basic'] = Mind::STATE_HATEFUL;
            if($data['seed_pride'] >= 5) $data['seed_psy_basic'] = Mind::STATE_ARROGANT;
        }

        //TODO ?? что-то связанное с менструацией
        $data['neg_menstruation'] = 0;
        $data['neg_slave'] = 1 + $data['seed_pride'] + $data['seed_temper'] + $data['seed_ego'] - $data['seed_custom'];
        $data['cycle_day'] = mt_rand(1,28);
        if($data['cycle_day'] < 6) $data['neg_menstruation'] = 6 - $data['seed_stamina'] - $data['cycle_day'];
        if($data['neg_menstruation'] < 0) $data['neg_menstruation'] = 0;
        $data['ovulation'] = 16 - $data['cycle_day'];
        if($data['ovulation'] < 0 || $data['ovulation'] > 7) $data['ovulation'] = 0;
        $data['calories'] = $data['seed_stamina'];
        $data['seed_brand'] = 0;

        //Equipment
        $data['seed_wpn'] = VarHelper::existOrElse($data, 'seed_wpn', '');
        $data['seed_scnd'] = VarHelper::existOrElse($data, 'seed_scnd', '');
        $data['seed_armor'] = VarHelper::existOrElse($data, 'seed_armor', '');
        $data['seed_back_wpn'] = VarHelper::existOrElse($data, 'seed_back_wpn', '');
        $data['seed_left_wpn'] = VarHelper::existOrElse($data, 'seed_left_wpn', '');
        $data['seed_arm_wpn'] = VarHelper::existOrElse($data, 'seed_arm_wpn', '');
        $data['seed_leg_wpn'] = VarHelper::existOrElse($data, 'seed_leg_wpn', '');
        $data['seed_cloth'] = VarHelper::existOrElse($data, 'seed_cloth', '');

        //TODO выяснить что это? Вынести в другое место
        //$data['newness'] = 10 - GameMechanics::getInstance()->gameRegister->character->attributes->mark->value;

        //Fixes a potential issue with Neoplasty being already done on new slaves - crushboss TODO ??
        $data['beauty_enchanced'] = 0;
        $data["bcheck"] = 0;
        $data["echeck"] = 0;

                //Descriptions
        $data['stock_family_description'] = VarHelper::existOrElse($data, 'stock_family_description', RandomHelper::randArrayValue($family->getDescriptions()));
        $data['stock_world_description'] = VarHelper::existOrElse($data, 'stock_world_description', RandomHelper::randArrayValue($world->getDescriptions()));
        $data['stock_occupation_description'] = VarHelper::existOrElse($data, 'stock_occupation_description', RandomHelper::randArrayValue($occupation->getDescriptions()));

        return $data;
    }

    private static function importTraitsFromData(Apprentice $apprentice, $data)
    {
        $key_to_class = [
            'seed_sport_affinity' => SportAffinity::class,
            'seed_expression_affinity' => ExpressionAffinity::class,
            'seed_pet_affinity' => PetAffinity::class,
            'seed_dressage_affinity' => DressageAffinity::class,
            'seed_nurse_affinity' => NurseAffinity::class,
            'seed_service_affinity' => ServiceAffinity::class,
            'seed_cook_affinity' => CookAffinity::class,
            'seed_gladiatrix_affinity' => GladiatorAffinity::class,
            'seed_enchanter_affinity' => EnchanterAffinity::class,
            'seed_vocal_affinity' => VocalAffinity::class,
            'seed_music_affinity' => MusicAffinity::class,
            'seed_callisthenics_affinity' => DanceAffinity::class,
            'seed_secretary_affinity' => SecretaryAffinity::class,
            'seed_memory' => Memory::class,
            'seed_meekness' => Meekness::class,
            'seed_selfesteem' => Selfesteem::class,
            'seed_voice' => Voice::class,
            'seed_compassion' => Compassion::class,
            'seed_courage' => Courage::class,
            'seed_grace' => Grace::class,
            'seed_nymphomania' => Nymphomania::class,
            'seed_exhibitionism' => Exhibitionism::class,
            'seed_preversion' => Perversion::class,
            'seed_masohism' => Masohism::class,
            'seed_homosexualism' => Homosexualism::class,
            'seed_abuse_attitude' => AbuseAttitude::class,
            'seed_blood_attitude' => BloodAttitude::class,
            'seed_passion_sweets' => PassionSweets::class,
            'seed_ill' => Illness::class,
            'seed_parasite' => Parasite::class,
            'seed_slave_scares' => Scars::class,
            'seed_scares' => Scars::class,
            'seed_slave_bruises' => Bruises::class,
            'seed_bruises' => Bruises::class,
        ];

        foreach ($key_to_class as $key => $class)
        {
            if(!empty($data[$key]))
            {
                $apprentice->traits->attachQuiet(new $class());
                if(!empty($data[$key . '_revealed']))
                {
                    $apprentice->traits->revealTrait($class);
                }
            }
        }

    }

    /**
     * @param $filename
     * @return Apprentice
     */
    public static function export($filename)
    {
        $age_assoc = [
            0 => AgeFemale::YOUNG,
            1 => AgeFemale::LOLI,
            2 => AgeFemale::MATURE,
        ];

        $apprentice = new Apprentice();

        $data = static::load($filename);
        $data = static::fillUpLoadedData($data);

        //Attributes
        $apprentice->name = $data['seed_name'];
        $apprentice->world_id = $data['seed_world'];
        $apprentice->family_origin_id = $data['seed_family'];
        $apprentice->template_id = $filename;
        $apprentice->occupation_id = $data['seed_occupation'];
        $apprentice->age->value = $age_assoc[$data['seed_age']]; //json age margin
        $apprentice->attributes->beauty->value = $data['seed_beauty'];
        $apprentice->attributes->sensuality->value = $data['seed_sensitivity'];
        $apprentice->attributes->temperament->value = $data['seed_temper'];
        $apprentice->attributes->ego->value = $data['seed_ego'];
        $apprentice->attributes->pride->value = $data['seed_pride'];
        $apprentice->attributes->intellect->value = $data['seed_intellect'];
        $apprentice->attributes->constitution->value = $data['seed_fat'];
        $apprentice->attributes->exoticism->value = $data['seed_exotic'];
        $apprentice->attributes->arenaFame->value = $data['seed_fame_rate'];
        $apprentice->attributes->fertility->value = $data['seed_fertility'] < 0 ? 0 : $data['seed_fertility'];
        $apprentice->attributes->fertility->revealed = $data['seed_fertility_revealed'];
        $apprentice->attributes->stamina->value = $data['seed_stamina'];
        $apprentice->attributes->metabolism->value = $data['seed_metabolism'];

        //Aura
        $apprentice->aura->habit->value = $data['seed_custom'];
        $apprentice->aura->loyalty->value = $data['seed_moral'];
        $apprentice->aura->taming->value = $data['seed_instinct'];
        $apprentice->aura->awareness->value = $data['seed_awareness'];
        $apprentice->aura->obedience->value = $data['seed_obedience'];
        $apprentice->aura->lust->value = $data['seed_lust'];
        $apprentice->aura->fear->value = $data['seed_fear'];
        $apprentice->aura->desperation->value = $data['seed_angst'];
        $apprentice->aura->corruption->value = $data['seed_spoil'];

        //Skills
        $apprentice->skills->expression->value = $data['seed_expression'];
        $apprentice->skills->pet->value = $data['seed_pet'];
        $apprentice->skills->horse->value = $data['seed_dressage'];
        $apprentice->skills->nurse->value = $data['seed_nurse'];
        $apprentice->skills->maid->value = $data['seed_service'];
        $apprentice->skills->cook->value = $data['seed_cook'];
        $apprentice->skills->gladiator->value = $data['seed_gladiatrix'];
        $apprentice->skills->enchanter->value = $data['seed_enchanter'];
        $apprentice->skills->vocal->value = $data['seed_vocal'];
        $apprentice->skills->music->value = $data['seed_music'];
        $apprentice->skills->dancer->value = $data['seed_callisthenics'];
        $apprentice->skills->secretary->value = $data['seed_secretary'];

        //SkillsSex
        $apprentice->skillsSex->petting->subSkills->hj->value = $data['seed_sub_hj'];
        $apprentice->skillsSex->petting->subSkills->fj->value = $data['seed_sub_fj'];
        $apprentice->skillsSex->petting->subSkills->hugging->value = $data['seed_sub_hug'];
        $apprentice->skillsSex->petting->subSkills->pazuri->value = $data['seed_sub_pazuri'];
        $apprentice->skillsSex->oral->subSkills->kissing->value = $data['seed_sub_kiss'];
        $apprentice->skillsSex->oral->subSkills->licking->value = $data['seed_sub_thongue'];
        $apprentice->skillsSex->oral->subSkills->bj->value = $data['seed_sub_bj'];
        $apprentice->skillsSex->oral->subSkills->dt->value = $data['seed_sub_dt'];
        $apprentice->skillsSex->oral->subSkills->aLicking->value = $data['seed_sub_asslik'];
        $apprentice->skillsSex->penetration->subSkills->vaginal->value = $data['seed_sub_vaginal'];
        $apprentice->skillsSex->penetration->subSkills->anal->value = $data['seed_sub_anal'];
        $apprentice->skillsSex->penetration->subSkills->fisting->value = $data['seed_sub_fisting'];
        $apprentice->skillsSex->penetration->subSkills->aFisting->value = $data['seed_anal_stretch'];
        $apprentice->skillsSex->demonstration->subSkills->seduce->value = $data['seed_sub_seduce'];
        $apprentice->skillsSex->demonstration->subSkills->masturbation->value = $data['seed_sub_masturbation'];
        $apprentice->skillsSex->demonstration->subSkills->masturbation->value = $data['seed_sub_dildo'];
        $apprentice->skillsSex->demonstration->subSkills->exhibit->value = $data['seed_sub_exhibit'];
        $apprentice->skillsSex->demonstration->subSkills->humiliation->value = $data['seed_sub_humiliation'];
        $apprentice->skillsSex->fetish->subSkills->enema->value = $data['seed_sub_enema'];
        $apprentice->skillsSex->fetish->subSkills->mazo->value = $data['seed_sub_mazo'];
        $apprentice->skillsSex->fetish->subSkills->selfpain->value = $data['seed_sub_selfpain'];
        $apprentice->skillsSex->fetish->subSkills->goldenRain->value = $data['seed_sub_piss'];
        $apprentice->skillsSex->fetish->subSkills->copro->value = $data['seed_sub_kopro'];
        $apprentice->skillsSex->orgy->subSkills->threesome->value = $data['seed_sub_threesome'];
        $apprentice->skillsSex->orgy->subSkills->dp->value = $data['seed_sub_dp'];
        $apprentice->skillsSex->orgy->subSkills->tp->value = $data['seed_sub_tp'];
        $apprentice->skillsSex->orgy->subSkills->gangbang->value = $data['seed_sub_gangbang'];
        $apprentice->skillsSex->orgy->subSkills->bukkake->value = $data['seed_sub_bukake'];
        $apprentice->skillsSex->xenophily->subSkills->dog->value = $data['seed_sub_zoosex'];
        $apprentice->skillsSex->xenophily->subSkills->beast->value = $data['seed_sub_bestiality'];
        $apprentice->skillsSex->xenophily->subSkills->horse->value = $data['seed_sub_horse'];
        $apprentice->skillsSex->xenophily->subSkills->tentacleSea->value = $data['seed_sub_tentacles']; // or seed_sub_polypusvermin
        $apprentice->skillsSex->xenophily->subSkills->spider->value = $data['seed_sub_arachnidSpider'];

        //Body
        $apprentice->body->breast->value = $data['seed_boobs'];
        $apprentice->body->vagina->is_virgin = $data['seed_virginity'] == 0;
        $apprentice->body->vagina->value = $apprentice->body->vagina->is_virgin ? 0 : 2;
        $apprentice->body->mind->value = $data['seed_psy_basic'];
        //Piercing
        $apprentice->body->breast->has_nipples_piercing = $data['seed_niple_piercing'];
        $apprentice->body->vagina->has_clit_piercing = $data['seed_clit_piercing'];
        $apprentice->body->ears->has_piercing = $data['seed_ear_piercing'];
        $apprentice->body->tongue->has_piercing = $data['seed_thongue_piercing'];
        $apprentice->body->tongue->splitted = $data['seed_thongue_split'];
        $apprentice->body->belly->has_navel_piercing = $data['seed_belly_piercing'];
        $apprentice->body->nose->has_piercing = $data['seed_nose_piercing'];
        $apprentice->body->has_scarification = $data['seed_scarification'];
        //$data['seed_nosdril_piercing'] //??
        //TODO Tattoos
        $apprentice->body->brand->value = $data['seed_brand'];
        //TODO Pregnancy

        //Traits
        static::importTraitsFromData($apprentice, $data);

        //Equipment
        $apprentice->equipment->weapon->equip($data['seed_wpn']);
        $apprentice->equipment->weaponSecond->equip($data['seed_scnd']);
        $apprentice->equipment->armor->equip($data['seed_armor']);
        $apprentice->equipment->cloth->equip($data['seed_cloth']);
        $apprentice->equipment->weaponBack->equip($data['seed_back_wpn']);
        $apprentice->equipment->weaponLeft->equip($data['seed_left_wpn']);
        $apprentice->equipment->weaponLeg->equip($data['seed_leg_wpn']);

        //Descriptions
        $apprentice->descriptions->family = $data['stock_family_description'];
        $apprentice->descriptions->world = $data['stock_world_description'];
        $apprentice->descriptions->occupation = $data['stock_occupation_description'];

        //Images
        $apprentice->visuals->avatar = $data['seed_ava'];
        $apprentice->visuals->avatar_gray = $data['seed_ava_gray'];
        $apprentice->visuals->avatar_clear = $data['seed_ava_clear'];

        $apprentice->visuals->boobs = $data['seed_boobs_img'];
        $apprentice->visuals->pussy = $data['seed_pussy_img'];

        $apprentice->visuals->fullimage = $data['fullimage'];
        $apprentice->visuals->bathing_alone = $data['bathing_alone'];
        $apprentice->visuals->cello = $data['cello'];
        $apprentice->visuals->cleaning = $data['cleaning'];
        $apprentice->visuals->cooking = $data['cooking'];
        $apprentice->visuals->dance = $data['dance'];
        $apprentice->visuals->desertag = $data['desertag'];
        $apprentice->visuals->enchanting = $data['enchanting'];
        $apprentice->visuals->fighting = $data['fighting'];
        $apprentice->visuals->flyte = $data['flyte'];
        $apprentice->visuals->guitar = $data['guitar'];
        $apprentice->visuals->gymnastics = $data['gymnastics'];
        $apprentice->visuals->lesbo_bath = $data['lesbo_bath'];
        $apprentice->visuals->nurse = $data['nurse'];
        $apprentice->visuals->piano = $data['piano'];
        $apprentice->visuals->rest = $data['rest'];
        $apprentice->visuals->secretary = $data['secretary'];
        $apprentice->visuals->student = $data['student'];
        $apprentice->visuals->singing = $data['singing'];
        $apprentice->visuals->violin = $data['violin'];
        $apprentice->visuals->washing = $data['washing'];
        $apprentice->visuals->analfisting = $data['analfisting'];
        $apprentice->visuals->analsex = $data['analsex'];
        $apprentice->visuals->bondage = $data['bondage'];
        $apprentice->visuals->bdsm = $data['bdsm'];
        $apprentice->visuals->bj = $data['bj'];
        $apprentice->visuals->bukkake = $data['bukake'];
        $apprentice->visuals->disgrace = $data['disgrace'];
        $apprentice->visuals->defloration = $data['defloration'];
        $apprentice->visuals->deprivation_suit = $data['deprivation_suit'];
        $apprentice->visuals->dog_sex = $data['dog_sex'];
        $apprentice->visuals->dildo = $data['dildo'];
        $apprentice->visuals->dt = $data['dt'];
        $apprentice->visuals->enema = $data['enema'];
        $apprentice->visuals->exhibit = $data['exhibit'];
        $apprentice->visuals->fisting = $data['fisting'];
        $apprentice->visuals->fj = $data['fj'];
        $apprentice->visuals->gangbang = $data['gangbang'];
        $apprentice->visuals->hj = $data['hj'];
        $apprentice->visuals->horse_sex = $data['horse_sex'];
        $apprentice->visuals->hug = $data['hug'];
        $apprentice->visuals->kiss = $data['kiss'];
        $apprentice->visuals->kopro = $data['kopro'];
        $apprentice->visuals->kuni = $data['kuni'];
        $apprentice->visuals->lesbian = $data['lesbian'];
        $apprentice->visuals->masturbation = $data['masturbation'];
        $apprentice->visuals->pazuri = $data['pazuri'];
        $apprentice->visuals->petplay = $data['petplay'];
        $apprentice->visuals->petting = $data['petting'];
        $apprentice->visuals->pig_sex = $data['pig_sex'];
        $apprentice->visuals->ponyplay = $data['ponyplay'];
        $apprentice->visuals->rimming = $data['rimming'];
        $apprentice->visuals->seduce = $data['seduce'];
        $apprentice->visuals->sex_vaginal = $data['sex_vaginal'];
        $apprentice->visuals->spider = $data['spider'];
        $apprentice->visuals->tongue = $data['thongue'];
        $apprentice->visuals->tentacles = $data['tentacles'];
        $apprentice->visuals->urine_drink = $data['urine_drink'];
        $apprentice->visuals->branding = $data['branding'];
        $apprentice->visuals->cane = $data['cane'];
        $apprentice->visuals->ear_grab = $data['ear_grab'];
        $apprentice->visuals->ironmaiden = $data['ironmaiden'];
        $apprentice->visuals->fireswing = $data['fireswing'];
        $apprentice->visuals->fist_hit = $data['fist_hit'];
        $apprentice->visuals->leash = $data['leash'];
        $apprentice->visuals->needle = $data['needle'];
        $apprentice->visuals->pins = $data['pins'];
        $apprentice->visuals->slap = $data['slap'];
        $apprentice->visuals->spank = $data['spank'];
        $apprentice->visuals->strappado = $data['strappado'];
        $apprentice->visuals->verminpit = $data['verminpit'];
        $apprentice->visuals->water = $data['water'];
        $apprentice->visuals->wax = $data['wax'];
        $apprentice->visuals->woodenhorse = $data['woodenhorse'];
        $apprentice->visuals->whip = $data['whip'];
        $apprentice->visuals->impaling = $data['impaling'];
        $apprentice->visuals->decapitation = $data['decapitation'];
        $apprentice->visuals->hanging = $data['hanging'];
        $apprentice->visuals->throat_slit = $data['throat_slit'];
        $apprentice->visuals->cook_whole = $data['cook_whole'];

        return $apprentice;
    }
}