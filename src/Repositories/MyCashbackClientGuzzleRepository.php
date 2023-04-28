<?php

namespace Myolchauz\Mycashbackclient\Repositories;


use Myolchauz\Mycashbackclient\Repositories\Interfaces\GuzzleSendRequestInterface;
use Myolchauz\Mycashbackclient\Repositories\Interfaces\MyCashbackClientRepositoryInterface;

class MyCashbackClientGuzzleRepository implements MyCashbackClientRepositoryInterface
{
    public function sendRequestForCashback(GuzzleSendRequestInterface $guzzleSendRequest) {
        $guzzleSendRequest->sendRequest();
    }
}
