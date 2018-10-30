<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ConsumeRuleFaker;
use Railken\Amethyst\Managers\ConsumeRuleManager;
use Railken\Amethyst\Tests\BaseTest;
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
