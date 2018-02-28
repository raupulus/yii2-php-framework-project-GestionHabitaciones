<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();

echo '<script>$.leftbar({}, [
                [\'Menú1\',\'./images/1.jpg\',\'#\'],
                [\'Menú2\',\'./images/2.jpg\',\'#\'],
                [\'Menú3\',\'./images/3.jpg\',\'#\'],
                [\'Menú4\',\'./images/4.jpg\',\'#\'],
                [\'Menú5\',\'./images/5.jpg\',\'#\'],
                [\'Menú6\',\'./images/6.jpg\',\'http://www.fryntiz.es\'],
            ]);</script>';
