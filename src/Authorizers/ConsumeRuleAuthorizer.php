<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ConsumeRuleAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'consume-rule.create',
        Tokens::PERMISSION_UPDATE => 'consume-rule.update',
        Tokens::PERMISSION_SHOW   => 'consume-rule.show',
        Tokens::PERMISSION_REMOVE => 'consume-rule.remove',
    ];
}
