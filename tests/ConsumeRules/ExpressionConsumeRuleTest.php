<?php

namespace Railken\Amethyst\Tests\ConsumeRules;

use Railken\Amethyst\ConsumeRules\ExpressionConsumeRule;
use Railken\Amethyst\Exceptions;
use Railken\Amethyst\Fakers\ConsumeRuleFaker;
use Railken\Amethyst\Managers\ConsumeRuleManager;
use Railken\Amethyst\Tests\BaseTest;

class ExpressionConsumeRuleTest extends BaseTest
{
    public function testSuccess()
    {
        $manager = new ConsumeRuleManager();

        $resource = $manager->createOrFail(
            ConsumeRuleFaker::make()->parameters()
                ->set('class_name', ExpressionConsumeRule::class)
                ->set('payload', ['expression' => 'x * (v / 100 + 1)'])
        )->getResource();

        $rule = new ExpressionConsumeRule();

        $this->assertEquals(1.22, $rule->calculate($resource, ['vars' => ['v' => 22]]));
    }

    public function testExceptionWrongExpression()
    {
        $this->expectException(Exceptions\ConsumeRuleWrongPayloadException::class);
        $manager = new ConsumeRuleManager();

        $resource = $manager->createOrFail(ConsumeRuleFaker::make()->parameters()
            ->set('class_name', ExpressionConsumeRule::class)
            ->set('payload', [])
        )->getResource();

        $rule = new ExpressionConsumeRule();
        $rule->calculate($resource, ['vars' => ['v' => 22]]);
    }

    public function testExceptionWrongOptions()
    {
        $this->expectException(Exceptions\ConsumeRuleWrongOptionsException::class);
        $manager = new ConsumeRuleManager();

        $resource = $manager->createOrFail(ConsumeRuleFaker::make()->parameters()
            ->set('class_name', ExpressionConsumeRule::class)
            ->set('payload', ['expression' => 'x * (v / 100 + 1)'])
        )->getResource();

        $rule = new ExpressionConsumeRule();

        $this->assertEquals(1.22, $rule->calculate($resource));
    }
}
