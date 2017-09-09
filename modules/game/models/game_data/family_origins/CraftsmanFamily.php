<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class CraftsmanFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'craftsman';
    }

    public function getName()
    {
        return 'Ремесленники';
    }

    public function getNameAuc()
    {
        return 'дочь ремесленника';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, []);
    }
}