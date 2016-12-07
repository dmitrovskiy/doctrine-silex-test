<?php

/** @var \Silex\Application $app **/

$app['user.controller'] = function () {
    return new \App\Controllers\UserController();
};

$app['middleware.jsonParser'] = function () {
    return new \App\Middleware\JsonParser();
};

$app['middleware.errorHandler'] = function () {
    return new \App\Middleware\ErrorHandler();
};