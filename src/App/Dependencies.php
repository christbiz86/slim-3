<?php

use Psr\Container\ContainerInterface;
use App\Handler\ApiError;
use App\Service\RedisService;

$container = $app->getContainer();

$container['db'] = function ($c){
    $settings = $c->get('settings')['db'];
    $server = $settings['driver'].":host=".$settings['host'].";dbname=".$settings['dbname'];
    $conn = new PDO($server, $settings["user"], $settings["pass"]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $conn;
};

//$container['errorHandler'] = function (): ApiError {
//    return new ApiError;
//};
//
//$container['redis_service'] = function (): RedisService {
//    return new RedisService(new \Predis\Client(getenv('REDIS_URL')));
//};
