<?php

namespace Grixu\SociusDto;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;

abstract class SociusDto extends Data
{
    #[DataCollectionOf(RelationsData::class)]
    public array|null $relations = null;
}
