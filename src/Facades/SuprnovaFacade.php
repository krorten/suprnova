<?php

namespace Krorten\Suprnova\Facades;

use Illuminate\Support\Facades\Facade;

class SuprnovaFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Suprnova';
    }
}