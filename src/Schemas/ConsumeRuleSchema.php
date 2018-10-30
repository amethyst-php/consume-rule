<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Contracts\ConsumeRuleContract;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class ConsumeRuleSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true)
                ->setUnique(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\ClassNameAttribute::make('class_name', [ConsumeRuleContract::class]),
            Attributes\ObjectAttribute::make('payload'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
