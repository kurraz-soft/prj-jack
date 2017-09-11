<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\libraries\OutfitLibrary;

abstract class BaseItemOutfit extends BaseItem
{
    public $bonus;
    public $shop_img;

    /**
     * @return string
     */
    abstract public function getType();

    public function loadFromLibrary()
    {
        $data = OutfitLibrary::findById($this->id, $this->getType());
        OutfitLibrary::fillObject($this, $data);
    }

    public function getDefaultId()
    {
        return 'nothing';
    }
}