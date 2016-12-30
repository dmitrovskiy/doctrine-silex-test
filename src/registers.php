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
            'url'    => $app['config.DB_URL']
        ]
    ]
);

$cache = $app['PHP_ENV'] == 'default' ? 'array' : 'memcache';

$app->register(
    new \Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider(), [
        'orm.proxies_dir'              => __DIR__ . '/DoctrineProxies',
        'orm.proxies_namespace'        => 'App\\DoctrineProxies',
        'orm.default_cache'            => $cache,
        'db.orm.auto_generate_proxies' => true,
        'orm.em.options'               => [
            'mappings' => [
                [
                    'type'                         => 'annotation',
                    'namespace'                    => 'App\\Entities',
                    'alias'                        => '',
                    'path'                         => __DIR__ . '/Entities',
                    'use_simple_annotation_reader' => true
                ]
            ]
        ]
    ]
);

$app->after($app['cors']);
$app->before('middleware.jsonParser:analyze');

$app->error('middleware.errorHandler:handle', -10);