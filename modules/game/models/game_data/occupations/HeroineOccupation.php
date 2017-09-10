<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class HeroineOccupation implements IOccupation
{
    public function getId()
    {
        return 'heroine';
    }

    public function getName()
    {
        return 'героиня-воительница';
    }

    public function getDescriptions()
    {
        return [
            'Кровные враги напали на мою семью и перебили всех; в живых оставили лишь меня, думая, что я не опасна. Но я поклялась отомстить. Я выросла сильной и бесстрашной воительницей. Мне довелось пережить немало приключений, но проклятые Туманы забрали меня раньше, чем я исполнила свою клятву.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}