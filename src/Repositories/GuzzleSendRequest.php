<?php

namespace Myolchauz\Mycashbackclient\Repositories;

use GuzzleHttp\Client;
use Myolchauz\Mycashbackclient\Repositories\Interfaces\GuzzleSendRequestInterface;

class GuzzleSendRequest implements GuzzleSendRequestInterface
{
    public $user_id;
    public $cashback_action_id;
    public $attributes;

    public function __construct($user_id, $cashback_action_id, $attributes) {
        $this->user_id = $user_id;
        $this->cashback_action_id = $cashback_action_id;
        $this->attributes = $attributes;
    }

    public function initializeClient() {
        $baseURL = config('mycashbackclient.guzzleClient.cashback_app_base_url');
        $cashbackClient = new Client([
            'base_uri' => ($baseURL),
        ]);

        return $cashbackClient;
    }

    public function sendRequest() {
        $methodType = config('mycashbackclient.guzzleClient.method_type');
        $path = config('mycashbackclient.guzzleClient.path');
        $method = config('mycashbackclient.guzzleClient.method');


        $response = ($this->initializeClient())->request($methodType, $path, ['json' => [
            'jsonrpc'   => "2.0",
            "method"    => $method,
            "params"    => [
                "user_id" => $this->user_id,
                "cashback_action_id" => $this->cashback_action_id,
                "attributes" => $this->attributes
            ]
        ]]);

        return $response;
    }
}
