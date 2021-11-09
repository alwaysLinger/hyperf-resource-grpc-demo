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

use Grpc\GetUserRep;
use Hyperf\ResourceGrpc\GrpcResource;

class GetUserRepResource extends GrpcResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(): array
    {
        return [
            'users' => HiUserResource::collection($this->resource),
        ];
    }

    /**
     * The grpc message for the resource.
     */
    public function expect(): string
    {
        return GetUserRep::class;
    }
}
