<?php

namespace app\web\themes\dashboard;

use Yii;
use panix\engine\web\AssetBundle;

/**
 * Class AdminLoginAsset
 * @package app\web\themes\dashboard
 */
class AdminLoginAsset extends AssetBundle {

    public $sourcePath = __DIR__ . '/assets';

    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];
    public $css = [
        'css/dashboard.css',
        'css/login.css',
    ];
    public $depends = [
        'panix\engine\assets\CommonAsset'
    ];

}
