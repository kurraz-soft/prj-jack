<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface IValuable
{
    public function getValue();
    public function setValue($new_value);
}