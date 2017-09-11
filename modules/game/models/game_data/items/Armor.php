<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\items;


use app\modules\game\models\game_data\base\BaseItem;
use app\modules\game\models\libraries\ArmorLibrary;

class Armor extends BaseItem
{
    public $bonus;

    public function loadFromLibrary()
    {
        $item_data = ArmorLibrary::findById($this->id);
        ArmorLibrary::fillObject($this,$item_data);
    }

    public function getDefaultId()
    {
        return 'no_armor';
    }
}