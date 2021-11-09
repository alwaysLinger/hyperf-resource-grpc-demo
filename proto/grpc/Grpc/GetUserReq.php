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

/**
 * Empty request.
 *
 * Generated from protobuf message <code>grpc.GetUserReq</code>
 */
class GetUserReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Grpc::initOnce();
        parent::__construct($data);
    }
}
