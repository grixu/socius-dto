<?php

namespace Grixu\SociusDto;

use Spatie\DataTransferObject\DataTransferObject;

class RelationsData extends DataTransferObject
{
    public string $foreignClass;
    public string $type;
    public string $relation;
    public string $foreignField;
    public array|int|null $foreignKeys;
}
