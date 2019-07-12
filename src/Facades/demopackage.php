<?php

namespace tuanha\demopackage\Facades;

use Illuminate\Support\Facades\Facade;

class demopackage extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'demopackage';
    }
}
