<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\widgets\FixedPjax;


use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\Response;
use yii\widgets\Pjax;
use Yii;

/**
 * @inheritdoc
 *
 * Fixed EVENT_AFTER_ACTION bug
 */
class FixedPjax extends Pjax
{
    public function run()
    {
        if (!$this->requiresPjax()) {
            echo Html::endTag(ArrayHelper::remove($this->options, 'tag', 'div'));
            $this->registerClientScript();

            return;
        }

        $view = $this->getView();
        $view->endBody();

        // Do not re-send css files as it may override the css files that were loaded after them.
        // This is a temporary fix for https://github.com/yiisoft/yii2/issues/2310
        // It should be removed once pjax supports loading only missing css files
        $view->cssFiles = null;

        $view->endPage(true);

        $content = ob_get_clean();

        // only need the content enclosed within this widget
        $response = Yii::$app->getResponse();
        $response->clearOutputBuffers();
        $response->setStatusCode(200);
        $response->format = Response::FORMAT_HTML;
        $response->content = $content;
        $response->headers->setDefault('X-Pjax-Url', Yii::$app->request->url);
        $response->send();

        Yii::$app->controller->afterAction(Yii::$app->controller->action,$content);

        Yii::$app->end();
    }
}