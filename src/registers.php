<?php

/** @var \Silex\Application $app * */

$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(
    new \JDesrosiers\Silex\Provider\CorsServiceProvider(),
    [
        'cors.allowOrigin' => '*',
        'cors.maxAge'      => 10000
    ]
);

$app->register(
    new \Silex\Provider\DoctrineServiceProvider(),
    [
        'db.options' => [
            'driver' => 'pdo_mysql',
            'url'    => 'mysql://root:password@mysql/app'
        ]
    ]
);

$app->register(
    new \Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider(),
    [
        
    ]
);

$app->after($app['cors']);
$app->before('middleware.jsonParser:analyze');

$app->error('middleware.errorHandler:handle', -10);