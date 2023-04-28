<?php

namespace Myolchauz\Mycashbackclient;

use Myolchauz\Mycashbackclient\Repositories\Interfaces\CustomGuzzleSendRequestInterface;
use Myolchauz\Mycashbackclient\Repositories\Interfaces\GuzzleSendRequestInterface;

class GuzzleSendRequestAdapter implements GuzzleSendRequestInterface
{
    private $customGuzzleSendRequest;

    public function __construct(CustomGuzzleSendRequestInterface $customGuzzleSendRequest) {
        $this->customGuzzleSendRequest = $customGuzzleSendRequest;
    }

    public function sendRequest()
    {
        $this->customGuzzleSendRequest->customGuzzleSendRequest();
    }
}
