<?php

namespace Myolchauz\Mycashbackclient\Repositories\Interfaces;


interface MyCashbackClientRepositoryInterface
{
    public function sendRequestForCashback(GuzzleSendRequestInterface $guzzleSendRequest);
}
