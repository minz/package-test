<?php

namespace Minz\PackageTest;

class Test
{
    public function demo()
    {
        echo "this is demo func";
    }

    public function execute()
    {
        echo "this is execute func";
    }

    public function getConfig()
    {
        var_dump(config('test'));
    }
}