<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style-starter.css',
        '//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap'
    ];
    public $js = [
        'js/main.js',
        'js/jquery-3.3.1.min.js',
        'js/theme-change.js',
        'js/jquery.magnific-popup.min.js',
        'js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
