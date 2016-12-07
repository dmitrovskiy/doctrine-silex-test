<?php

namespace App\Controllers;

use App\Entities\User;
use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class UserController
 *
 * @package App\Controllers
 */
class UserController extends Controller
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/users/{id}', 'user.controller:findById');
        $controllers->post('/users', 'user.controller:create');

        return $controllers;
    }

    public function findById($id, Application $app)
    {
        return $app->json(['id' => $id]);
    }

    public function create(Application $app, Request $request)
    {
        $data = $request->request->all();

        $user = new User($data);
        $userRepo = $this->factoryRepo->getUserRepository($app['db']);
        $userRepo->create($user);

        return new JsonResponse(null, 201);
    }
}
