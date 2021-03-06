<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26326a07bed19701b607f2c55414c516
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26326a07bed19701b607f2c55414c516::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26326a07bed19701b607f2c55414c516::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit26326a07bed19701b607f2c55414c516::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit26326a07bed19701b607f2c55414c516::$classMap;

        }, null, ClassLoader::class);
    }
}
