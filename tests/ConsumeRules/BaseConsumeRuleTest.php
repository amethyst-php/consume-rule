<?php

namespace Railken\Amethyst\Tests\ConsumeRules;

use Railken\Amethyst\ConsumeRules\BaseConsumeRule;
use Railken\Amethyst\Fakers\ConsumeRuleFaker;
use Railken\Amethyst\Managers\ConsumeRuleManager;
use Railken\Amethyst\Tests\BaseTest;

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
