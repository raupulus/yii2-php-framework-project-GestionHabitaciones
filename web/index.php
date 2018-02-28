<?php

require __DIR__ . '/../vendor/autoload.php';

if (($getenv = getenv('YII_ENV')) !== 'prod'
    && file_exists($file = __DIR__ . '/../.env')) {
    (new \Symfony\Component\Dotenv\Dotenv())->load($file);
}

define('YII_ENV', $getenv ?: 'dev');
define('YII_DEBUG', getenv('YII_DEBUG') ?: YII_ENV == 'dev');

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
