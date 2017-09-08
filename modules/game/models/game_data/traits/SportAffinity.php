<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\traits;


use app\modules\game\models\game_data\base\ApprenticeTrait;

class SportAffinity extends ApprenticeTrait
{
    public function getName()
    {
        return 'Любит спорт';
    }

    public function onAttach()
    {
        // TODO: Implement onAttach() method.
    }

    public function onDetach()
    {
        // TODO: Implement onDetach() method.
    }
}