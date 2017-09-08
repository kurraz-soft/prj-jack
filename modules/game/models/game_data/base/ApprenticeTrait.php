<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\game_data\Apprentice;
use yii\base\Exception;

abstract class ApprenticeTrait implements ITrait
{
    /**
     * @var Apprentice
     */
    protected $_context;

    /**
     * @return Apprentice
     * @throws Exception
     */
    public function getContext()
    {
        if(!$this->_context) throw new Exception("Not attached to context");

        return $this->_context;
    }

    public function initContext($context)
    {
        $this->_context = $context;
    }

    public function attachTo($context)
    {
        $this->_context = $context;
        $this->onAttach();
    }

    public function detach()
    {
        $this->onDetach();
        $this->_context = null;
    }
}