<?php

namespace App\Controllers;

use App\Factories\RepositoryFactory;
use Silex\Api\ControllerProviderInterface;

/**
 * Class Controller
 *
 * @package App\Controllers
 */
abstract class Controller implements ControllerProviderInterface
{
    /** @var RepositoryFactory */
    protected $factoryRepo = null;

    public function __construct(RepositoryFactory $factoryRepo)
    {
        $this->factoryRepo = $factoryRepo;
    }
}