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

namespace Grpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.GetUserRep</code>.
 */
class GetUserRep extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .grpc.HiUser users = 1;</code>.
     */
    private $users;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var \Google\Protobuf\Internal\RepeatedField|\Grpc\HiUser[] $users
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Grpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .grpc.HiUser users = 1;</code>.
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated .grpc.HiUser users = 1;</code>.
     * @param \Google\Protobuf\Internal\RepeatedField|\Grpc\HiUser[] $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grpc\HiUser::class);
        $this->users = $arr;

        return $this;
    }
}
