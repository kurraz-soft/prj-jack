<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface IOccupation extends IJsonDataAffectable
{
    public function getId();
    public function getName();
    public function getDescriptions();
}