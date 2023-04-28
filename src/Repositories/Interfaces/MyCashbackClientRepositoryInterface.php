<?php

namespace Myolchauz\Mycashbackclient\Repositories\Interfaces;

use Myolchauz\Mycashbackclient\DTO\MycashbackclientDTO;

interface MyCashbackClientRepositoryInterface
{
    public function sendRequestForCashback(MycashbackclientDTO $myCashbackClientDTO);
}
