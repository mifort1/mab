<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\web\themes\rightChoice;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/rightChoice/assets';
    public $baseUrl = '@web/themes/rightChoice/assets';
    public $css = [
        'css/style.css',
        'css/jquery-ui.css',
        'css/responsive-options.css',
        'css/bootstrap.css',
        'css/megamenu.css',
        'css/bootstrap-responsive.css',
        'css/jquery.formstyler.css',
        'css/elastic-slideshow.css',
        'css/dlmenu.css',
        'css/smartwizard.css',
        'css/font-awesome.css',
        'css/multizoom.css',
        'css/jquery.modal.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
    public $js = [
        'js/jquery.eislideshow.js',
        'js/jquery.easing.js',
        'js/jquery.dlmenu.js',
        'js/jquery.smartwizard.js',
        'js/jquery.formstyler.js',
        'js/jquery.nicescroll.js',
        'js/jquery.carouFredSel-6.2.1-packed.js',
        'js/jquery.ui.core.js',
        'js/jquery.ui.widget.js',
        'js/jquery.ui.mouse.js',
        'js/jquery.ui.slider.js',
        'js/jquery.ui.tabs.js',
        'js/jquery.modal.js',
        'js/jquery.jcountdown.js',
        'js/script.js',
//        'js/main.js',
    ];
}
