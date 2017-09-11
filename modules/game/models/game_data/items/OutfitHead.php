<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\items;


use app\modules\game\models\game_data\base\BaseItemOutfit;

class OutfitHead extends BaseItemOutfit
{
    public function getType()
    {
        return 'head';
    }
}