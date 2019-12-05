<?php

namespace App\Controller;

use Slim\Container;
use Slim\Http\Response;

abstract class BaseController
{
    /**
     * @var Container
     */
    protected $container;

    protected function jsonResponse(Response $response, $status, $message, $code){
        $result = [
            'code' => $code,
            'status' => $status,
            'message' => $message,
        ];
        return $response->withJson($result, $code, JSON_PRETTY_PRINT);
    }

//    protected function jsonResponse(Response $response, string $status, $message, int $code):  Response
//    {
//        $result = [
//            'code' => $code,
//            'status' => $status,
//            'message' => $message,
//        ];
//
//        return $response->withJson($result, $code, JSON_PRETTY_PRINT);
//    }
}
