<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\occupations;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IOccupation;

class ValertryOccupation implements IOccupation
{
    public function getId()
    {
        return 'valertry';
    }

    public function getName()
    {
        return 'служанка';
    }

    public function getDescriptions()
    {
        return [
            'Когда я подросла, то смогла устроиться прислугой в замке. Работа была самая низовая: стирка да уборка. Я не отлынивала, трудилась на славу. В один день, когда я стирала белье на реке, вокруг сгустился Туман и я заплутала в нем...',

        ];
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data,[
            
        ]);
    }
}