<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6681da0a7a3e61f5df38449fe9d3965
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6681da0a7a3e61f5df38449fe9d3965::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6681da0a7a3e61f5df38449fe9d3965::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6681da0a7a3e61f5df38449fe9d3965::$classMap;

        }, null, ClassLoader::class);
    }
}
