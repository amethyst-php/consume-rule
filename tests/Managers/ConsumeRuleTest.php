<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ConsumeRuleFaker;
use Amethyst\Managers\ConsumeRuleManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ConsumeRuleTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ConsumeRuleManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ConsumeRuleFaker::class;
}
