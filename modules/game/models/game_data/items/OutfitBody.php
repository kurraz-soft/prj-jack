<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\items;


use app\modules\game\models\game_data\base\BaseItemOutfit;

class OutfitBody extends BaseItemOutfit
{
    public function getType()
    {
        return 'body';
    }

    public function getDefaultId()
    {
        return 'no_cloth';
    }
}