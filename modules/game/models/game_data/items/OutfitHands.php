<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\items;


use app\modules\game\models\game_data\base\BaseItemOutfit;

class OutfitHands extends BaseItemOutfit
{
    public function getType()
    {
        return 'hands';
    }
}