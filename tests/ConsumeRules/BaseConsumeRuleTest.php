<?php

namespace Amethyst\Tests\ConsumeRules;

use Amethyst\ConsumeRules\BaseConsumeRule;
use Amethyst\Fakers\ConsumeRuleFaker;
use Amethyst\Managers\ConsumeRuleManager;
use Amethyst\Tests\BaseTest;

class BaseConsumeRuleTest extends BaseTest
{
    public function testSuccess()
    {
        $manager = new ConsumeRuleManager();

        $resource = $manager->createOrFail(ConsumeRuleFaker::make()->parameters()->set('class_name', BaseConsumeRule::class))->getResource();

        $rule = new BaseConsumeRule();

        $this->assertEquals(1, $rule->calculate($resource));
    }
}
