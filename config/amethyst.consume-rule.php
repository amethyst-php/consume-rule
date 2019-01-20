<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'consume-rule' => [
            'table'      => 'amethyst_consume_rules',
            'comment'    => 'ConsumeRule',
            'model'      => Railken\Amethyst\Models\ConsumeRule::class,
            'schema'     => Railken\Amethyst\Schemas\ConsumeRuleSchema::class,
            'repository' => Railken\Amethyst\Repositories\ConsumeRuleRepository::class,
            'serializer' => Railken\Amethyst\Serializers\ConsumeRuleSerializer::class,
            'validator'  => Railken\Amethyst\Validators\ConsumeRuleValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\ConsumeRuleAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\ConsumeRuleFaker::class,
            'manager'    => Railken\Amethyst\Managers\ConsumeRuleManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'consume-rule' => [
                'enabled'    => true,
                'controller' => Railken\Amethyst\Http\Controllers\Admin\ConsumeRulesController::class,
                'router'     => [
                    'as'     => 'consume-rule.',
                    'prefix' => '/consume-rules',
                ],
            ],
        ],
    ],
];
