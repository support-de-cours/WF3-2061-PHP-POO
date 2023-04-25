<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc78fc03793cdffb13b27fcb0c21632ef
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc78fc03793cdffb13b27fcb0c21632ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc78fc03793cdffb13b27fcb0c21632ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc78fc03793cdffb13b27fcb0c21632ef::$classMap;

        }, null, ClassLoader::class);
    }
}
