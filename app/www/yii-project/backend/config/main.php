<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'language' => 'ru',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

//        'urlManager' => [
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'rules' => [
//            ],
//        ],

        'urlManager' => [
            // 'scriptUrl' => '/backend/index.php', // single domaindan kiradigan qilib apache va nginxni sozlayotganda ishlatiladi
            'enablePrettyUrl' => true,
            'showScriptName' => false,

            'class' => 'codemix\localeurls\UrlManager',
            // List all supported languages here
            // Make sure, you include your app's default language.
            'languages' => [ 'ru', 'uz','en'],
            'enableDefaultLanguageUrlCode' => false,

            // 'ignoreLanguageUrlPatterns' => [
            //     // route pattern => url pattern
            //     '#^site/ckfinder/#' => '#^site/ckfinder/#',
            //     '#^ckfinder/ckfinder.html#' => '#^ckfinder/ckfinder.html#',
            // ],

            'rules' => [
                '' => 'site/index',
                // '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
                '<language:\w{2}>' => 'site/index',
                '<language:\w{2}>/<_c:\w+>' => '<_c>/index',
                '<language:\w{2}>/<_c:\w+>/<id:\d+>' => '<_c>/view',
                '<language:\w{2}>/<_c:\w+>/<action:\w+>' => '<_c>/<action>',
            ],
        ],

    ],
    'params' => $params,
];
