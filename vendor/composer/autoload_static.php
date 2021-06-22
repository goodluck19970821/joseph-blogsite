<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit080b32a846b49c0fde11d5de05a1c5a6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit080b32a846b49c0fde11d5de05a1c5a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit080b32a846b49c0fde11d5de05a1c5a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit080b32a846b49c0fde11d5de05a1c5a6::$classMap;

        }, null, ClassLoader::class);
    }
}
