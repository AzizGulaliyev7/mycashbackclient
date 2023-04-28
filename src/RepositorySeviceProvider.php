<?php

namespace Myolchauz\Mycashbackclient;

use Myolchauz\Mycashbackclient\Repositories\Interfaces\MyCashbackClientRepositoryInterface;
use Myolchauz\Mycashbackclient\Repositories\MyCashbackClientGuzzleRepository;

class RepositorySeviceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MyCashbackClientRepositoryInterface::class, function ($app) {
            $implementation = config('mycashbackclient.requesting_service_type');
            switch ($implementation) {
                case 'guzzleClient':
                    return new MyCashbackClientGuzzleRepository();
                default:
                    throw new \Exception("Invalid MyInterface implementation: $implementation");
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
