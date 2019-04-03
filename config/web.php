<?php

Yii::setAlias('@backend', dirname(__DIR__) . '/../shopium24.loc/backend/web');
Yii::setAlias('@frontend', dirname(__DIR__) . '/../shopium24.loc/frontend/web');
Yii::setAlias('@console', dirname(__DIR__) . '/../shopium24.loc/console/web');

Yii::setAlias('@client', dirname(__DIR__));




$config = [
    'id' => 'client',
    'basePath' => dirname(__DIR__).'/../shopium24.loc', //if in web dir
	//'vendorPath' => dirname(__DIR__).'/../shopium24.loc/vendor',
    //'basePath' => dirname(__DIR__),

    'components' => [
        //'urlManager' => require(__DIR__ . '/urlManager.php'),
        'db' => [
            'class' => 'panix\engine\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=shopium24',
            'username' => 'root',
            'password' => '47228960panix',
            //'charset'=>'utf8',
            'charset' => 'utf8mb4', //utf8_general_ci на utf8mb4_general_ci. FOR Emoji
            //'on afterOpen' => function($event) {
            //$event->sender->createCommand("SET time_zone = '" . date('P') . "'")->execute();
            //$event->sender->createCommand("SET names utf8")->execute();
            //},
            'tablePrefix' => 'cms_',
            'serverStatusCache' => YII_DEBUG ? 0 : 3600,
            'schemaCacheDuration' => YII_DEBUG ? 0 : 3600*24,
            'enableSchemaCache' => true,
            'schemaCache' => 'cache',

        ],
    ],
    /*'as access' => [
        'class' => panix\mod\rbac\filters\AccessControl::class,
        'allowActions' => [
            '/*',
            'admin/*',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],*/
    'params' => require(dirname(__DIR__) . '/../shopium24.loc/common/config/params.php'),
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    //$config['bootstrap'][] = 'debug';
    $config['modules']['debug']['class'] = 'yii\debug\Module';
    // $config['modules']['debug']['traceLine'] = '<a href="phpstorm://open?url={file}&line={line}">{file}:{line}</a>';
    $config['modules']['debug']['traceLine'] = function ($options, $panel) {
        $filePath = $options['file'];
        // $filePath = str_replace(Yii::$app->basePath, 'file://~/path/to/your/backend', $filePath);
        // $filePath = str_replace(dirname(Yii::$app->basePath) . '/common', 'file://~/path/to/your/common', $filePath);
        /// $filePath = str_replace(Yii::$app->vendorPath, 'file://~/path/to/your/vendor', $filePath);
        return strtr('<a href="phpstorm://open?url={file}&line={line}">{file}:{line}</a>', ['{file}' => $filePath]);
    };
    //$config['modules']['debug']['dataPath'] = '@runtime/debug';
    //$config['bootstrap'][] = 'gii';
    //$config['modules']['gii'] = 'yii\gii\Module';
}

return $config;

