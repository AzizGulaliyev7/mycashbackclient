<?php

namespace Myolchauz\Mycashbackclient\Facades;

use Illuminate\Support\Facades\Facade;

class Mycashbackclient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'mycashbackclient';
    }
}
