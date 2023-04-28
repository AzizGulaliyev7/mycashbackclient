<?php

namespace Myolchauz\Mycashbackclient\DTO;

use Myolchauz\Mycashbackclient\Repositories\MyCashbackClientGuzzleRepository;

class MycashbackclientDTO
{
    public $user_id;
    public $cashback_action_id;
    public $attributes;

    public function __construct($user_id, $cashback_action_id, $attributes) {
        $this->user_id = $user_id;
        $this->cashback_action_id = $cashback_action_id;
        $this->attributes = $attributes;
    }

    public function getImplementationType($type) {
        $actionTypes = array(
            'guzzleClient' => MyCashbackClientGuzzleRepository::class
        );

        return app()->make($actionTypes[$type]);
    }
}
