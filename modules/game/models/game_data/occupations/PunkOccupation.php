<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class PunkOccupation implements IOccupation
{
    public function getId()
    {
        return 'punk';
    }

    public function getName()
    {
        return 'неформалка';
    }

    public function getDescriptions()
    {
        return [
            'Все наше сраное общество, это одна большая клоака. Система. Чертовы конформисты, постриженные под одну гребенку. Я обожала рвать им шаблоны. Слушала тяжелую музыку, красила волосы в невообразимые оттенки и бухала с корешами на кладбище по ночам. Было весело...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}