<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3506257f7af8bedaaf67d101535d48b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Com\\Wowza\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Com\\Wowza\\' => 
        array (
            0 => __DIR__ . '/..' . '/wowza/wse-rest-library-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3506257f7af8bedaaf67d101535d48b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3506257f7af8bedaaf67d101535d48b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
