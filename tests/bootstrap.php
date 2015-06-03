<?php
error_reporting(-1);
define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);

require(__DIR__ . '/../../../autoload.php');
require(__DIR__ . '/../../../yiisoft/yii2/Yii.php');

Yii::setAlias('@tests', __DIR__);

new \yii\console\Application([
    'id' => 'unit',
    'basePath' => __DIR__,
    'vendorPath' => __DIR__ . '/../../../',
    'components' => [
        'assetManager' => [
            'class' => 'tests\AssetManager',
            'basePath' => '@tests/assets',
            'baseUrl' => '/',
        ],
    ],
]);