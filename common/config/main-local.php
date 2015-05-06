<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'urlManager'=>[
            'class' => 'yii\web\UrlManager',
            'showScriptName'=>FALSE,
            'enablePrettyUrl'=>TRUE,
//            'enableScriptParsing'=>TRUE
        ],
        'authManager' =>[
            'class' => 'yii\rbac\DbManager'
        ]
    ],
];
