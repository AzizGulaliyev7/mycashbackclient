<?php

namespace Myolchauz\Mycashbackclient;

use Myolchauz\Mycashbackclient\Repositories\Interfaces\CashbackRequestBuilderInterface;

class Mycashbackclient
{
    public function sendRequestForCashback(CashbackRequestBuilderInterface $cashbackRequestBuilder) {
        $response = $cashbackRequestBuilder->sendRequest();
        $handlingResponse = new HandlingResponse();
        return $handlingResponse->handleResponse($response);
    }
}
