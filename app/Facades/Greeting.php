<?php

namespace App\Facades;

use App\Services\GreetingServices;
use Illuminate\Support\Facades\Facade;

class Greeting extends Facade
{
    // public static function resolve($name)
    // {
    //     return app()->make($name);
    // }
    // public static function __callStatic($method, $arguments)
    // {
    //     // return (new GreetingServices())->$method(...$arguments);
    //     // return app()->make('Greeting')->$method(...$arguments);
    //     return self::resolve('Greeting')->$method(...$arguments);
    // }
    protected static function getFacadeAccessor()
    {
        return 'Greeting';
    }
}

