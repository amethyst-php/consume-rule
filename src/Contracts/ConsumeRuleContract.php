<?php

namespace Amethyst\Contracts;

use Amethyst\Models\ConsumeRule;

interface ConsumeRuleContract
{
    /**
     * Given the base consumeRule calculate the final consume.
     *
     * @param ConsumeRule $consumeRule
     * @param array       $options
     *
     * @return float
     */
    public function calculate(ConsumeRule $consumeRule, array $options = []): float;
}
