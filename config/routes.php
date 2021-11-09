<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});

Router::addServer('grpc', function () {
    Router::addGroup('/grpc.hi', function () {
        // Use: prototool grpc proto/grpc.proto --address 0.0.0.0:9503 --method grpc.hi/sayHello --data='{"name":"foo","sex":1}'
        // See: {"message":"Hello World","user":{"name":"foo","sex":1}}
        Router::post('/sayHello', [\App\Controller\Grpc\HiUserController::class, 'sayHello']);
        // Use: prototool grpc proto/grpc.proto --address 0.0.0.0:9503 --method grpc.hi/getUsers --data='{}'
        // See: {"users":[{"name":"foo","sex":1},{"name":"bar","sex":1},{"name":"baz","sex":1}]}
        Router::post('/getUsers', [\App\Controller\Grpc\HiUserController::class, 'getUsers']);
    });
});
