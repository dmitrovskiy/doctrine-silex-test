<?php

namespace App\Middleware;

use App\Exception\ApplicationException;
use App\HTTPCode;
use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ErrorHandler
 *
 * @package Hatch\Core\Middleware
 */
class ErrorHandler
{
    public function handle(\Exception $e)
    {
        $message['message'] = $e->getMessage();
        if ($e instanceof ApplicationException) {
            $message['systemInfo'] = $e->getSystemInfo();
        }

        $code = 500;
        $httpCode = new HTTPCode();
        if ($httpCode::codeExists($e->getCode())) {
            $code = $e->getCode();
            $message['responseMessage'] = $httpCode::codeToString($code);
        }

        return new JsonResponse($message, $code);
    }
}
