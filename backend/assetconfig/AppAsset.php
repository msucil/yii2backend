<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assetconfig;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@backtheme';
    public $css = [
        
        "font-awesome/css/font-awesome.css",
        "css/plugins/morris/morris-0.4.3.min.css",
        "css/animate.css",
        "css/style.css"
        
    ];
    
    public $js = [
        //main script 
//        "js/jquery-2.1.1.js",
        "js/bootstrap.min.js",
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        
        "js/plugins/jquery-ui/jquery-ui.min.js",
//        "js/plugins/peity/jquery.peity.min.js",
//        "js/demo/peity-demo.js",
        //custom plugin
        "js/inspinia.js",
        "js/plugins/pace/pace.min.js",
        
        
//        'js/inspinia.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
