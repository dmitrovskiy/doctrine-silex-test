<?php

/** @var \Silex\Application $app **/

$app['user.controller'] = function () use ($app) {
    return new \App\Controllers\UserController($app['factory.repository']);
};

$app['middleware.jsonParser'] = function () {
    return new \App\Middleware\JsonParser();
};

$app['middleware.errorHandler'] = function () {
    return new \App\Middleware\ErrorHandler();
};

$app['factory.repository'] = function () {
    return new \App\Factories\Repositories\DBAL\MySQL\RepositoryFactory();
};