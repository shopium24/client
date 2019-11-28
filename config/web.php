<?php
Yii::setAlias('@core', CORE_PATH);
$config = [
    'id' => 'client',
    'vendorPath' => CORE_PATH . '/vendor',
    'basePath' => dirname(__DIR__),
    'runtimePath' => '@app/runtime',
    'aliases' => [
        '@core' => CORE_PATH,
    ],
    'components' => [
        'db' => [
            'class' => 'panix\engine\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2',
            'username' => 'root',
            'password' => '47228960panix',
            'charset' => 'utf8mb4',
            'tablePrefix' => 'cms_',
            'serverStatusCache' => YII_DEBUG ? 0 : 3600,
            'schemaCacheDuration' => YII_DEBUG ? 0 : 3600 * 24,
            'enableSchemaCache' => true,
            'schemaCache' => 'cache',

        ],
        'view' => [
            'theme' => [
                'name' => 'autima'
            ],
        ],
    ],
    'params' => require(CORE_PATH . '/config/params.php'),
];

return $config;

