<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@backImg' => '@backend/web/uploads/',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
//            'defaultRoles' => ['admin','editor','user'], // here define your roles
//            //'authFile' => '@console/data/rbac.php' //the default path for rbac.php | OLD CONFIGURATION
//            'itemFile' => '@console/data/items.php', //Default path to items.php | NEW CONFIGURATIONS
//            'assignmentFile' => '@console/data/assignments.php', //Default path to assignments.php | NEW CONFIGURATIONS
//            'ruleFile' => '@console/data/rules.php', //Default path to rules.php | NEW CONFIGURATIONS
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
