<?php

namespace BDroppy\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class BDroppyServiceProvider
 * @package BDroppy\Providers
 */
class BDroppyServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(BDroppyRouteServiceProvider::class);
    }
}