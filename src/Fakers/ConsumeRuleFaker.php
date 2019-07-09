<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Amethyst\ConsumeRules\BaseConsumeRule;
use Railken\Bag;
use Railken\Lem\Faker;

class ConsumeRuleFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('class_name', BaseConsumeRule::class);
        $bag->set('payload', ['x' => 1]);

        return $bag;
    }
}
