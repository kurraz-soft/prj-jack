<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface IChild
{
    public function setParent($parent_obj);
    public function getParent();
    public function getDependency($class);
}