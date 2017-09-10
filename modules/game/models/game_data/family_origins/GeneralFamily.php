<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class GeneralFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'general';
    }

    public function getName()
    {
        return 'генеральская дочка';
    }

    public function getNameAuc()
    {
        return 'генеральская дочка';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мой отец был генералом и в семье поддерживал строгий порядок. Думаю ему хотелось чтобы я была мальчиком, тогда бы он мог заставлять меня маршировать и делать другие глупости. Хотя мы были хорошо обеспечены, я завидовала другим детям, у которых в доме были не такие суровые правила.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'major',
'model',
'writer',
'artist',

        ];
    }
}