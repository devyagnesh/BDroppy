<?php

namespace BDroppy\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class BDroppyRouteServiceProvider
 * @package BDroppy\Providers
 */
class BDroppyRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('/bdroppy','BDroppy\Controllers\BDroppyController@getHelloWorldPage');
    }
}