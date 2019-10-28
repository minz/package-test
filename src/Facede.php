<?php


namespace Minz\PackageTest;

use Illuminate\Support\Facades\Facade as laravelFacade;

class Facede extends laravelFacade
{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}