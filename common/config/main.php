<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'urlManagerFrontend' => [
//            'class' => 'yii\web\urlManager',
//            'baseUrl' => '/yii2_advanced/frontend/web',
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//        ],
//
//        'urlManagerBackend' => [
//            'class' => 'yii\web\urlManager',
//            'baseUrl' => '/yii2_advanced/backend/web',
//            'enablePrettyUrl' => true,
//        ],
    ],
];
