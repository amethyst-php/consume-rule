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
            'model'      => Amethyst\Models\ConsumeRule::class,
            'schema'     => Amethyst\Schemas\ConsumeRuleSchema::class,
            'repository' => Amethyst\Repositories\ConsumeRuleRepository::class,
            'serializer' => Amethyst\Serializers\ConsumeRuleSerializer::class,
            'validator'  => Amethyst\Validators\ConsumeRuleValidator::class,
            'authorizer' => Amethyst\Authorizers\ConsumeRuleAuthorizer::class,
            'faker'      => Amethyst\Fakers\ConsumeRuleFaker::class,
            'manager'    => Amethyst\Managers\ConsumeRuleManager::class,
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
                'controller' => Amethyst\Http\Controllers\Admin\ConsumeRulesController::class,
                'router'     => [
                    'as'     => 'consume-rule.',
                    'prefix' => '/consume-rules',
                ],
            ],
        ],
    ],
];
