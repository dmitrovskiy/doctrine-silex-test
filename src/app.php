<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/injections.php';
require __DIR__.'/registers.php';
require __DIR__.'/controllers.php';

return $app;
