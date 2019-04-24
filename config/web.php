<?php

Yii::setAlias('@client', dirname(__DIR__));

$config = [
    'id' => 'client',
    'basePath' => dirname(__DIR__).'/../shopium24.loc', //if in web dir
	//'vendorPath' => dirname(__DIR__).'/../shopium24.loc/vendor',
    //'basePath' => dirname(__DIR__),
    'runtimePath'=>'@client/runtime',
    'components' => [
        //'urlManager' => require(__DIR__ . '/urlManager.php'),
        'db' => [
            'class' => 'panix\engine\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=shopium24',
            'username' => 'root',
            'password' => '47228960panix',
            'charset' => 'utf8mb4', //utf8_general_ci на utf8mb4_general_ci. FOR Emoji
            'tablePrefix' => 'cms_',
            'serverStatusCache' => YII_DEBUG ? 0 : 3600,
            'schemaCacheDuration' => YII_DEBUG ? 0 : 3600*24,
            'enableSchemaCache' => true,
            'schemaCache' => 'cache',

        ],
    ],
    'params' => require(dirname(__DIR__) . '/../shopium24.loc/common/config/params.php'),
];

return $config;

