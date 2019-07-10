<?php

namespace Amethyst\ConsumeRules;

use Amethyst\Contracts\ConsumeRuleContract;
use Amethyst\Exceptions;
use Amethyst\Models\ConsumeRule;
use MathParser\Interpreting\Evaluator;
use MathParser\StdMathParser;

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
