<?php

namespace Grixu\SociusDto\Tests;

use Grixu\SociusDto\SociusDto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SociusDtoTest extends TestCase
{
    protected $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $data = [
            'test' => 'Test',
            'relations' => [
                [
                    'foreignClass' => Model::class,
                    'type' => BelongsTo::class,
                    'relation' => 'relation',
                    'foreignField' => 'id',
                    'foreignKeys' => 10,
                ],
                [
                    'foreignClass' => Model::class,
                    'type' => BelongsToMany::class,
                    'relation' => 'manyToMany',
                    'foreignField' => 'id',
                    'foreignKeys' => 4,
                ],
            ],
        ];

        $this->obj = new class ($data) extends SociusDto {
            public string $test;
        };
    }

    /** @test */
    public function it_creates()
    {
        $this->assertTrue(is_subclass_of($this->obj, SociusDto::class));
    }

    /** @test */
    public function it_have_access_to_relations()
    {
        $this->assertIsArray($this->obj->relations);
        $this->assertNotEmpty($this->obj->relations);
        $this->assertCount(2, $this->obj->relations);
    }

    /** @test */
    public function it_dumps_relations_to_array()
    {
        $dumped = $this->obj->toArray();

        $this->assertIsArray($dumped);
        $this->assertIsArray($dumped['relations']);
        $this->assertIsArray($dumped['relations'][0]);
    }
}
