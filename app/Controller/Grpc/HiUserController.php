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
namespace App\Controller\Grpc;

use App\Model\User;
use App\Resource\GetUserRepResource;
use Grpc\GetUserReq;
use Grpc\HiReply;
use Grpc\HiUser;

class HiUserController
{
    public function sayHello(HiUser $user): HiReply
    {
        $message = new HiReply();
        $message->setMessage('Hello World');
        $message->setUser($user);
        return $message;
    }

    public function getUsers(GetUserReq $req): \Google\Protobuf\Internal\Message
    {
        $users = collect([
            new User(['name' => 'foo']),
            new User(['name' => 'bar']),
            new User(['name' => 'baz']),
        ]);

        return GetUserRepResource::make($users)->toMessage();
    }
}
