<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccb4b10a2e9740fb5bad293350483e23
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mon\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitccb4b10a2e9740fb5bad293350483e23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccb4b10a2e9740fb5bad293350483e23::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}