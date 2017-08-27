<?php

namespace app\modules\game;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

/**
 * game module definition class
 */
class Module extends \yii\base\Module
{
    public $layout = 'main';

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\game\controllers';

    public $defaultRoute = 'default/index';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        \Yii::setAlias('@module', __DIR__);
    }

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(),[
            'access' => [
                'class' => AccessControl::class,
                'rules' => require(__DIR__.'/access_rules.php'),
            ]
        ]);
    }
}
