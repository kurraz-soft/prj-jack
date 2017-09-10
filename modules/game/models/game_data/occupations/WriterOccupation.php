<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class WriterOccupation implements IOccupation
{
    public function getId()
    {
        return 'writer';
    }

    public function getName()
    {
        return 'автор женских романов';
    }

    public function getDescriptions()
    {
        return [
            'Еще со школы я отлично владела языком. Писала какие-то стихи и короткие рассказы. Получалось неплохо, всем нравилось. Так что я решила сделать карьеру писательницы. Даже опубликовала кое-что и получила некоторое признание публики. Но успела только две главы из книги которая должна была стать бомбой!',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}