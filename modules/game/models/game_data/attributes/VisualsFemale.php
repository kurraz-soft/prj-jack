<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseGameDataList;

class VisualsFemale extends BaseGameDataList
{
    public $avatar;
    public $avatar_gray;
    public $avatar_clear;

    /**
     * @var string
     * Изображение в полный рост
     */
    public $fullimage;

    public $boobs;
    public $pussy;

    public $bathing_alone;
    public $cello;
    public $cleaning;
    public $cooking;
    public $dance;
    public $desertag;
    public $enchanting;
    public $fighting;
    public $flyte;
    public $guitar;
    public $gymnastics;
    public $lesbo_bath;
    public $nurse;
    public $piano;
    public $rest;
    public $secretary;
    public $student;
    public $singing;
    public $violin;
    public $washing;
    public $analfisting;
    public $analsex;
    public $bondage;
    public $bdsm;
    public $bj;
    public $bukkake;
    public $disgrace;
    public $defloration;
    public $deprivation_suit;
    public $dog_sex;
    public $dildo;
    public $dt;
    public $enema;
    public $exhibit;
    public $fisting;
    public $fj;
    public $gangbang;
    public $hj;
    public $horse_sex;
    public $hug;
    public $kiss;
    public $kopro;
    public $kuni;
    public $lesbian;
    public $masturbation;
    public $pazuri;
    public $petplay;
    public $petting;
    public $pig_sex;
    public $ponyplay;
    public $rimming;
    public $seduce;
    public $sex_vaginal;
    public $spider;
    public $tongue;
    public $tentacles;
    public $urine_drink;
    public $branding;
    public $cane;
    public $ear_grab;
    public $ironmaiden;
    public $fireswing;
    public $fist_hit;
    public $leash;
    public $needle;
    public $pins;
    public $slap;
    public $spank;
    public $strappado;
    public $verminpit;
    public $water;
    public $wax;
    public $woodenhorse;
    public $whip;
    public $impaling;
    public $decapitation;
    public $hanging;
    public $throat_slit;
    public $cook_whole;
    
    public function serializableParams()
    {
        $props = (new \ReflectionClass($this))->getProperties(\ReflectionProperty::IS_PUBLIC);
        $ret = [];
        foreach ($props as $prop)
        {
            $ret[$prop->getName()] = '';
        }

        return $ret;
    }
}