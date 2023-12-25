<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback",
        "plugins/fontawesome-free/css/all.min.css",
        "plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
        "dist/css/adminlte.min.css",
    ];
    public $js = [
//    "plugins/jquery/jquery.min.js",
    "plugins/bootstrap/js/bootstrap.bundle.min.js",
    "plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
    "plugins/select2/js/select2.full.min.js",
    "plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js",
    "plugins/moment/moment.min.js",
    "plugins/inputmask/jquery.inputmask.min.js",
    "plugins/daterangepicker/daterangepicker.js",
    "plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js",
    "plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
    "plugins/bootstrap-switch/js/bootstrap-switch.min.js",
    "plugins/bs-stepper/js/bs-stepper.min.js",
    "plugins/dropzone/min/dropzone.min.js",
    "dist/js/adminlte.js",
    "plugins/jquery-mousewheel/jquery.mousewheel.js",
    "plugins/raphael/raphael.min.js",
    "plugins/jquery-mapael/jquery.mapael.min.js",
    "plugins/jquery-mapael/maps/usa_states.min.js",
    "plugins/chart.js/Chart.min.js",
    "/plugins/bootstrap-switch/js/bootstrap-switch.min.js",
    "dist/js/demo.js",
//    "dist/js/pages/dashboard2.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
