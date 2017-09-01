<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$dotenv = new \Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/test_db.php');

return [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'gii'],
    'aliases' => require(__DIR__.'/aliases.php'),
    'controllerNamespace' => 'app\commands',
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],
    ],
    'params' => $params,
];
