<?php

namespace Railken\Amethyst\Contracts;

use Railken\Amethyst\Models\ConsumeRule;

interface ConsumeRuleContract
{
    /**
     * Given the base consumeRule calculate the final consume.
     *
     * @param ConsumeRule $consumeRule
     * @param array       $options
     *
     * @return array
     */
    public function calculate(ConsumeRule $consumeRule, array $options = []);
}
