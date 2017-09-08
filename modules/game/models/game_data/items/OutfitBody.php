<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\items;


use app\modules\game\models\game_data\base\BaseItem;

class OutfitBody extends BaseItem
{
    public function loadFromLibrary()
    {
        // TODO: Implement loadFromLibrary() method.
    }

    public function getDefaultId()
    {
        return 'no_cloth';
    }
}