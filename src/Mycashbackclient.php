<?php

namespace Myolchauz\Mycashbackclient;

use GuzzleHttp\Client;

class Mycashbackclient
{
    public static function test(){
        $cashbackClient = new Client([
            'base_uri' => ('http://127.0.0.1:8000/api/v1/'),
        ]);

        $response = $cashbackClient->request('POST', 'cashback', ['json' => [
            'jsonrpc'   => "2.0",
            "method"    => "CashbackForCustomer@cashback",
            "params"    => [
                "user_id" => 1,
                "cashback_action_id" => 1,
                "attributes" => [
                    [
                        "cashback_action_attribute_id" => 1,
                        "value" => 250000
                    ],
                    [
                        "cashback_action_attribute_id" => 2,
                        "value" => 310000
                    ]
                ]
            ]
        ]]);

        $a = json_decode($response->getBody());

        return $a;
    }
}
