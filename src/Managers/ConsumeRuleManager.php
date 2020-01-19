<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\ConsumeRule                 newEntity()
 * @method \Amethyst\Schemas\ConsumeRuleSchema          getSchema()
 * @method \Amethyst\Repositories\ConsumeRuleRepository getRepository()
 * @method \Amethyst\Serializers\ConsumeRuleSerializer  getSerializer()
 * @method \Amethyst\Validators\ConsumeRuleValidator    getValidator()
 * @method \Amethyst\Authorizers\ConsumeRuleAuthorizer  getAuthorizer()
 */
class ConsumeRuleManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.consume-rule.data.consume-rule';
}
