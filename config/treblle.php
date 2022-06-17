<?php

return [
    // ...

    /*
     * Define which fields should be masked before leaving the server
     */
    'masked_fields' => [
        'password',
        'pwd',
        'secret',
        'password_confirmation',
        'cc',
        'card_number',
        'ccv',
        'ssn',
        'credit_score',
        'api_key',
    ],
];
