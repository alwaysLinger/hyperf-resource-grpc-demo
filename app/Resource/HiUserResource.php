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
namespace App\Resource;

use Grpc\HiUser;
use Hyperf\ResourceGrpc\GrpcResource;

class HiUserResource extends GrpcResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'sex' => 1,
        ];
    }

    /**
     * The grpc message for the resource.
     */
    public function expect(): string
    {
        return HiUser::class;
    }
}
