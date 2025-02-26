<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86ae07b9e187139d10fb3c30800d3535
{
    public static $files = array (
        '2a82134f8c11ccfe27d17678517b5b4b' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MinMaxWoocommerce\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MinMaxWoocommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86ae07b9e187139d10fb3c30800d3535::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86ae07b9e187139d10fb3c30800d3535::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86ae07b9e187139d10fb3c30800d3535::$classMap;

        }, null, ClassLoader::class);
    }
}
