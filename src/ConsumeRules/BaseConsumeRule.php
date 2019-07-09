<?php

namespace Amethyst\ConsumeRules;

use Amethyst\Contracts\ConsumeRuleContract;
use Amethyst\Models\ConsumeRule;

class BaseConsumeRule implements ConsumeRuleContract
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
        return 1;
    }
}
