<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85f6e615e4604ab5079e37227bff2a52
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'aplication\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'aplication\\' => 
        array (
            0 => __DIR__ . '/../..' . '/aplication',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85f6e615e4604ab5079e37227bff2a52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85f6e615e4604ab5079e37227bff2a52::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
