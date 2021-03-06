<?php

namespace ZfMetal\Security;

return[
   'zf-metal-security.options' => [
        'public_register' => true,
        'email_confirmation_require' => false,
        'user_state_default' => true,
        'password_recovery' => true,
        'bcrypt_cost'=> 12,
        'redirect_strategy' => [
            'redirect_when_connected' => true,
            'redirect_to_route_connected' => 'home',
            'redirect_to_route_disconnected' => 'zf-metal.user/login',
            'append_previous_uri' => true,
            'previous_uri_query_key' => 'redirect'
        ],
    ]
];
