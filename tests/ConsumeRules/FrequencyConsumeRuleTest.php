<?php

namespace Amethyst\Tests\ConsumeRules;

use Amethyst\ConsumeRules\FrequencyConsumeRule;
use Amethyst\Fakers\ConsumeRuleFaker;
use Amethyst\Managers\ConsumeRuleManager;
use Amethyst\Tests\BaseTest;

class FrequencyConsumeRuleTest extends BaseTest
{
    public function testSuccess()
    {
        $manager = new ConsumeRuleManager();

        $resource = $manager->createOrFail(
            ConsumeRuleFaker::make()->parameters()
                ->set('class_name', FrequencyConsumeRule::class)
                ->set('payload', [
                    'frequency_unit'  => 'months',
                    'frequency_value' => '1',
                ])
        )->getResource();

        $rule = new FrequencyConsumeRule();

        $this->assertEquals(1, $rule->calculate($resource, ['start' => $this->now()->modify('-1 month'), 'end' => $this->now()]));
        $this->assertEquals(2, $rule->calculate($resource, ['start' => $this->now()->modify('-2 month'), 'end' => $this->now()]));
        $this->assertEquals(null, $rule->calculate($resource, ['start' => $this->now()->modify('-15 days'), 'end' => $this->now()]));
        $this->assertEquals(24, $rule->calculate($resource, ['start' => $this->now()->modify('-2 years'), 'end' => $this->now()]));
    }

    public function now()
    {
        return (new \DateTime())->setTime(00, 00, 00, 00);
    }
}
