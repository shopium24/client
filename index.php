<?php

error_reporting(E_ALL);
//Timezone
date_default_timezone_set("UTC");

// comment out the following two lines when deployed to production
if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    $env = 'dev';
    $debug = true;
} else {
    $env = 'prod';
    $debug = false;

}
defined('BASE_PATH') or define('BASE_PATH', __DIR__ . '/../shopium24.loc');
defined('YII_DEBUG') or define('YII_DEBUG', $debug);
defined('YII_ENV') or define('YII_ENV', $env);

require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/vendor/yiisoft/yii2/Yii.php';


$config = yii\helpers\ArrayHelper::merge(
    require BASE_PATH . '/config/web.php',
    require __DIR__ . '/config/web.php'
);

(new panix\engine\WebApplication($config))->run();