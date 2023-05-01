<?php

return [
    /**
     *
     * Request jo'natishda ishlatilinadigan servis turi
     * Mavjud servislar: guzzleClient
     *
     */

    'requesting_service_type' => 'guzzleClient',

    /**
     *
     *
     */

    'guzzleClient' => [
        'cashback_app_base_url' => 'http://127.0.0.1:8080/api/v1/',
        'method_type' => "POST",
        'path' => 'cashback',
        'method' => 'CashbackForCustomer@cashback'
    ]
];
