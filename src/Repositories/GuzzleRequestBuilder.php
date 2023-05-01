<?php

namespace Myolchauz\Mycashbackclient\Repositories;

use GuzzleHttp\Client;
use Myolchauz\Mycashbackclient\Repositories\Interfaces\CashbackRequestBuilderInterface;

class GuzzleRequestBuilder extends RequestBuilder implements CashbackRequestBuilderInterface
{
    public function sendRequest() {
        $cashbackClient = new Client([
            'base_uri' => ($this->baseUri),
        ]);

        $response = $cashbackClient->request($this->method, $this->path, [
            'json'      => $this->jsonBody,
            'headers'   => $this->headers,
            'auth'      => $this->auth,
            'body'      => $this->body,
            'cookies'   => $this->cookie,
            'timeout'   => $this->timeout
        ]);

        return $response;
    }
}
