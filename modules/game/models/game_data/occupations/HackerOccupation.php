<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class HackerOccupation implements IOccupation
{
    public function getId()
    {
        return 'hacker';
    }

    public function getName()
    {
        return 'хакерша';
    }

    public function getDescriptions()
    {
        return [
            'В нашем мире компьютеров столько, что на самом деле это они правят миром, а вовсе не люди. Без умной машины и шагу не ступишь. А значит, тот кто сможет надуть машину, получит все, что захочет. Я рано это поняла и научилась хакать терминалы еще в том возрасте, когда меня за это даже нельзя было посадить.',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}