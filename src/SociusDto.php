<?php

namespace Grixu\SociusDto;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

abstract class SociusDto extends DataTransferObject
{
    #[CastWith(RelationsDataCaster::class)]
    public array|null $relations;
}
