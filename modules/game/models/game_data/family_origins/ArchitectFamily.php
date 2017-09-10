<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ArchitectFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'architect';
    }

    public function getName()
    {
        return 'воспитанная в семье архитекторов';
    }

    public function getNameAuc()
    {
        return 'воспитанная в семье архитекторов';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Мои родители были архитекторами и всегда работали только в паре. В нашем мире архитектура очень важна, ведь надо не только сделать дома функциональными, но и идеально вписать их в городской ландшафт, одновременно придав зданию неповторимую эстетическую ценность.',
        ];
    }

    public function getAvailableOccupations()
    {
        return [
            'student',
'hymnast',
'writer',
'artist',

        ];
    }
}