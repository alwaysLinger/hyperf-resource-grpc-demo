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
# source: grpc.proto

namespace GPBMetadata;

class Grpc
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
�

grpc.protogrpc"#
HiUser
name (	
sex ("6
HiReply
message (	
user (2.grpc.HiUser"

GetUserReq")

GetUserRep
users (2.grpc.HiUser2a
hi)
sayHello.grpc.HiUser.grpc.HiReply" 0
getUsers.grpc.GetUserReq.grpc.GetUserRep" bproto3',
            true
        );

        static::$is_initialized = true;
    }
}
