<?php

namespace Grixu\SociusDto;

use Spatie\DataTransferObject\Caster;

class RelationsDataCaster implements Caster
{
    public function cast(mixed $value): array
    {
        return array_map(
            fn(array $data) => new RelationsData(...$data),
            $value
        );
    }
}
