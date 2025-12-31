<?php

namespace App\Services;

class GreetingServices
{
    public function sayHello($name)
    {
        return "Hello, " . $name ;
    }

    public function sayGoodbye($name)
    {
        return "Goodbye, " . $name ;
    }
}
