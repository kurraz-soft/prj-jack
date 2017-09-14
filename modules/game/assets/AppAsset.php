<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\assets;


use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\View;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/assets_game';
    public $baseUrl = '@web/assets_game';
    public $css = [
        'css/style.css',
        //'font-awesome/css/font-awesome.min.css',
        //'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic',
    ];
    public $js = [
        //'js/layout.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        BootstrapPluginAsset::class,
        'yii\bootstrap\BootstrapAsset',
        \app\modules\game\widgets\GameTextMenu\assets\Asset::class,
    ];

    public function init()
    {
        $this->jsOptions['position'] = View::POS_HEAD;
        parent::init();
    }
}
