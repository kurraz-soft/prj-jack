<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface ITrait
{
    public function getName();
    public function onAttach();
    public function onDetach();
    public function initContext($context);
    public function attachTo($context);
    public function detach();
}