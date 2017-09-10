<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class RichWifeOccupation implements IOccupation
{
    public function getId()
    {
        return 'rich_wife';
    }

    public function getName()
    {
        return 'жена богача';
    }

    public function getDescriptions()
    {
        return [
            'В выборе своего жениха я особого голоса не имела. Родственники подобрали мне партию, выгодную им с точки зрения бизнеса. Муж мой был толстый и некрасивый, зато не дурак гульнуть со шлюхами в бане. Но и я себя особо не сдерживала. Пусть утрется!',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}