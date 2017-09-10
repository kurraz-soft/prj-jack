<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class VikingWifeOccupation implements IOccupation
{
    public function getId()
    {
        return 'viking_wife';
    }

    public function getName()
    {
        return 'молодая жена викинга';
    }

    public function getDescriptions()
    {
        return [
            'Когда мне исполнилось четырнадцать лет, меня взял в жены храбрый морской волк. Со мной он был нежен и привозил из-за моря разные диковинки. Но мы редко виделись, потому что муж мой больше времени посвящал морям и дальним берегам, чем мне.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}