<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface IFamilyOrigin extends IJsonDataAffectable
{
    public function getId();
    public function getName();
    public function getNameAuc();
}