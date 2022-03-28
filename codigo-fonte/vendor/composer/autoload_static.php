<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54173dca3ce48b5b9906d190be029d60
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54173dca3ce48b5b9906d190be029d60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54173dca3ce48b5b9906d190be029d60::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54173dca3ce48b5b9906d190be029d60::$classMap;

        }, null, ClassLoader::class);
    }
}
