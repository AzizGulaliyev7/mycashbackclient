<?php

namespace Myolchauz\Mycashbackclient;

use Myolchauz\Mycashbackclient\DTO\MycashbackclientDTO;
use Myolchauz\Mycashbackclient\Repositories\Interfaces\MyCashbackClientRepositoryInterface;

class Mycashbackclient
{
    public function sendRequestForCashback($user_id, $cashback_action_id, $attributes) {
        $myCashbackClientDTO = new MycashbackclientDTO($user_id, $cashback_action_id, $attributes);
        $requestImplementation = $myCashbackClientDTO->getImplementationType(config('mycashbackclient.requesting_service_type'));
        $this->processRequestForCashback($requestImplementation, $myCashbackClientDTO);

        return "";
    }

    protected function processRequestForCashback(MyCashbackClientRepositoryInterface $myCashbackClientRepository, $cashbackActionDTO) {
        $myCashbackClientRepository->sendRequestForCashback($cashbackActionDTO);
    }
}
