<?php

namespace App\Controllers;

use Silex\Api\ControllerProviderInterface;
use Silex\Application;

class UserController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/users', 'user.controller:getAllAction');

        return $controllers;
    }

    public function getAllAction(Application $app)
    {
        return $app->json(['message' => 'Hello, world']);
    }
}
