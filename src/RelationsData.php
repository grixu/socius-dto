<?php

namespace Grixu\SociusDto;

use Spatie\LaravelData\Data;

class RelationsData extends Data
{
    public string $foreignClass;
    public string $type;
    public string $relation;
    public string $foreignField;
    public array|int|null $foreignKeys;
}
