<?php

$app = require '../src/app.php';
$em = $app['orm.em'];

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);