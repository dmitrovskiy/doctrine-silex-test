<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$env = getenv('PHP_ENV');
$app['PHP_ENV'] = $env?:'default';
$configFilename = sprintf('%s.config.php', $app['PHP_ENV']);

require __DIR__."/Config/$configFilename";
require __DIR__.'/injections.php';
require __DIR__.'/registers.php';
require __DIR__.'/controllers.php';

return $app;
