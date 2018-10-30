<?php

namespace Railken\Amethyst\ConsumeRules;

use MathParser\Interpreting\Evaluator;
use MathParser\StdMathParser;
use Railken\Amethyst\Contracts\ConsumeRuleContract;
use Railken\Amethyst\Exceptions;
use Railken\Amethyst\Models\ConsumeRule;

class ExpressionConsumeRule implements ConsumeRuleContract
{
    /**
     * Given the base consumeRule calculate the final consume.
     *
     * @param ConsumeRule $consumeRule
     * @param array       $options
     *
     * @return float
     */
    public function calculate(ConsumeRule $consumeRule, array $options = [])
    {
        $payload = $consumeRule->payload;

        $options = (object) $options;

        $parser = new StdMathParser();

        if (!isset($payload->expression)) {
            throw new Exceptions\ConsumeRuleWrongPayloadException('Missing expression in payload');
        }

        if (!isset($options->vars)) {
            throw new Exceptions\ConsumeRuleWrongOptionsException('Missing vars in options');
        }

        $ast = $parser->parse($payload->expression);
        $evaluator = new Evaluator();
        $evaluator->setVariables(array_merge(['x' => 1], $options->vars));

        return floatval($ast->accept($evaluator));
    }
}
