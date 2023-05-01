<?php

namespace Myolchauz\Mycashbackclient\Repositories;

use Myolchauz\Mycashbackclient\Repositories\Interfaces\CashbackRequestBuilderInterface;

class GuzzleRequestBuilder extends RequestBuilder implements CashbackRequestBuilderInterface
{
    public function setBaseUri(string $baseUri = '') {
        if (!empty($baseUri)) {
            $this->baseUri = $baseUri;
        } else {
            $this->baseUri = config('mycashbackclient.guzzleClient.cashback_app_base_url');
        }
    }

    public function setMethod(string $method = '') {
        if (!empty($method)) {
            $this->method = $method;
        } else {
            $this->method = config('mycashbackclient.guzzleClient.method_type');
        }
    }

    public function setPath(string $path = '') {
        if (!empty($path)) {
            $this->path = $path;
        } else {
            $this->path = config('mycashbackclient.guzzleClient.path');
        }
    }

    public function sendRequest($user_id, $cashback_action_id, $attributes) {
        $method = config('mycashbackclient.guzzleClient.method');

        $cashbackClient = new Client([
            'base_uri' => ($this->baseUri),
        ]);

        $response = $cashbackClient->request($this->method, $this->path, [
            'json'  =>  [
                            'jsonrpc'   => "2.0",
                            "method"    => $method,
                            "params"    => [
                                    "user_id" => $user_id,
                                    "cashback_action_id" => $cashback_action_id,
                                    "attributes" => $attributes
                                ]
                        ],
            'headers'   => $this->headers,
            'auth'      => $this->auth,
            'body'      => $this->body,
            'cookies'   => $this->cookie,
            'timeout'   => $this->timeout
        ]);

        return $response;
    }
}