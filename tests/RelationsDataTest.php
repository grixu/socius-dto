<?php

namespace Grixu\SociusDto\Tests;

use Grixu\SociusDto\RelationsData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RelationsDataTest extends TestCase
{
    protected RelationsData $obj;

    /** @test */
    public function it_creates_itself_with_belongs_to(): void
    {
        $this->createBelongsToRelationshipData();

        $this->assertEquals(RelationsData::class, get_class($this->obj));
        $this->assertEquals(BelongsTo::class, $this->obj->type);
        $this->assertEquals(Model::class, $this->obj->foreignClass);
        $this->assertEquals(10, $this->obj->foreignKeys);
    }

    protected function createBelongsToRelationshipData(): void
    {
        $this->obj = new RelationsData(
            [
                'type' => BelongsTo::class,
                'foreignClass' => Model::class,
                'relation' => 'relationship',
                'foreignField' => 'id',
                'foreignKeys' => 10,
            ]
        );
    }
    /** @test */
    public function it_creates_itself_with_m2m(): void
    {
        $this->createManyToManyRelationshipData();

        $this->assertEquals(RelationsData::class, get_class($this->obj));
        $this->assertEquals(BelongsToMany::class, $this->obj->type);
        $this->assertEquals(Model::class, $this->obj->foreignClass);
        $this->assertIsArray($this->obj->foreignKeys);
        $this->assertCount(4, $this->obj->foreignKeys);
    }

    protected function createManyToManyRelationshipData(): void
    {
        $this->obj = new RelationsData(
            [
                'type' => BelongsToMany::class,
                'foreignClass' => Model::class,
                'relation' => 'manyToMany',
                'foreignField' => 'id',
                'foreignKeys' => [2, 3, 4, 5],
            ]
        );
    }
    /** @test */
    public function it_dumps_an_array(): void
    {
        $this->createBelongsToRelationshipData();

        $returnedData = $this->obj->toArray();

        $this->assertIsArray($returnedData);
        $this->assertCount(5, $returnedData);
    }
}
