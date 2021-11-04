<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Attribute Observers
    |--------------------------------------------------------------------------
    |
    | Here you may configure all desired Models and their respective Attribute
    | Observers. For example:
    |
    | 'observers' => [
    |    \App\Models\Order::class => [
    |        \App\AttributeObservers\OrderStatusObserver::class,
    |    ],
    | ]
    |
    */

    'observers' => [
        \App\Models\User::class => [
            \App\AttributeObservers\UserEmailObserver::class,
        ]
    ]
];
