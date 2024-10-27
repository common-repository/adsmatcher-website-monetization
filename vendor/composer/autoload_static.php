<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd950d39ab2122d39b053c1a5d9ff480a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Adsmatcher\\WebsiteMonetization\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Adsmatcher\\WebsiteMonetization\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd950d39ab2122d39b053c1a5d9ff480a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd950d39ab2122d39b053c1a5d9ff480a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd950d39ab2122d39b053c1a5d9ff480a::$classMap;

        }, null, ClassLoader::class);
    }
}