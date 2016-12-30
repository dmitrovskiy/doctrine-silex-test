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
        $user = $app['orm.em']->find(':User', $id);

        return $app->json(json_encode($user));
    }

    public function create(Application $app, Request $request)
    {
        $data = $request->request->all();

        $user = new User();
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);

        $app['orm.em']->persist($user);
        $app['orm.em']->flush();

        return new JsonResponse(null, 201);
    }
}
