<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d45753e1a57884ab5048a7bb66f5d30
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Minz\\PackageTest\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Minz\\PackageTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d45753e1a57884ab5048a7bb66f5d30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d45753e1a57884ab5048a7bb66f5d30::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
