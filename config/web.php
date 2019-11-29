<?php

$config = [
    'id' => 'client',
    'vendorPath' => COMMON_PATH . '/vendor',
    'basePath' => dirname(__DIR__),
    'runtimePath' => '@app/runtime',
    'aliases' => [
        '@core' => COMMON_PATH,
    ],
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=yii2',
            'username' => 'root',
            'password' => '47228960panix',
            'tablePrefix' => 'cms_',

        ],
        'view' => [
            'theme' => [
                'name' => 'autima'
            ],
        ],
    ],
    'params' => yii\helpers\ArrayHelper::merge([
        'plan_id' => 2,
    ],require(COMMON_PATH . '/config/params.php')),
];

return $config;

