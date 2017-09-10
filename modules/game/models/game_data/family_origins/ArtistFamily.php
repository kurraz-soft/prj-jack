<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\family_origins;


use app\modules\game\helpers\ArrayHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\IFamilyOrigin;

class ArtistFamily implements IFamilyOrigin
{
    public function getId()
    {
        return 'artist';
    }

    public function getName()
    {
        return 'воспитанная в творческой семье';
    }

    public function getNameAuc()
    {
        return 'воспитанная в творческой семье';
    }

    public function affectJsonData($data)
    {
        return ArrayHelper::sumArrays($data, [

        ]);
    }

    public function getDescriptions()
    {
        return [
            'Моя мама была великой художницей. Её талант признавали во всем мире. Она, конечно, с удовольствием делилась своими секретами с начинающими художниками и читала курс цветовой экспрессии в открытом университете. Любовь к рисованию я унаследовала от неё.',
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