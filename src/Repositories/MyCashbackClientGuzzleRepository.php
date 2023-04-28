<?php

namespace Myolchauz\Mycashbackclient\Repositories;

use GuzzleHttp\Client;
use Myolchauz\Mycashbackclient\DTO\MycashbackclientDTO;
use Myolchauz\Mycashbackclient\Repositories\Interfaces\MyCashbackClientRepositoryInterface;

class MyCashbackClientGuzzleRepository implements MyCashbackClientRepositoryInterface
{
    public function sendRequestForCashback(MycashbackclientDTO $myCashbackClientDTO) {
        $baseURL = config('mycashbackclient.guzzleClient.cashback_app_base_url');
        $methodType = config('mycashbackclient.guzzleClient.method_type');
        $path = config('mycashbackclient.guzzleClient.path');
        $method = config('mycashbackclient.guzzleClient.method');

        $cashbackClient = new Client([
            'base_uri' => ($baseURL),
        ]);

        $response = $cashbackClient->request($methodType, $path, ['json' => [
            'jsonrpc'   => "2.0",
            "method"    => $method,
            "params"    => [
                "user_id" => $myCashbackClientDTO->user_id,
                "cashback_action_id" => $myCashbackClientDTO->cashback_action_id,
                "attributes" => $myCashbackClientDTO->attributes
            ]
        ]]);

        $a = json_decode($response->getBody());

        return $a;
    }
}
