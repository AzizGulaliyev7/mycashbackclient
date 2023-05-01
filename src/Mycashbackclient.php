<?php

namespace Myolchauz\Mycashbackclient;

use Myolchauz\Mycashbackclient\Repositories\Interfaces\GuzzleSendRequestInterface;
use Myolchauz\Mycashbackclient\Repositories\Interfaces\MyCashbackClientRepositoryInterface;

class Mycashbackclient
{
    private $myCashbackClientRepository;

    public function __construct(MyCashbackClientRepositoryInterface $myCashbackClientRepository)
    {
        $this->myCashbackClientRepository = $myCashbackClientRepository;
    }

    public function sendRequestForCashback(GuzzleSendRequestInterface $guzzleSendRequest) {
        $response = $this->myCashbackClientRepository->sendRequestForCashback($guzzleSendRequest);

        return $response;
    }
}
