<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37c01c4d639f05f0d9d9a1ccf20ab219
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit37c01c4d639f05f0d9d9a1ccf20ab219::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37c01c4d639f05f0d9d9a1ccf20ab219::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37c01c4d639f05f0d9d9a1ccf20ab219::$classMap;

        }, null, ClassLoader::class);
    }
}
