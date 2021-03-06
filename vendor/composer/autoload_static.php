<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7815c6f202fec55ef53e8a755c2e1b5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Schean\\ApiController\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Schean\\ApiController\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7815c6f202fec55ef53e8a755c2e1b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7815c6f202fec55ef53e8a755c2e1b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb7815c6f202fec55ef53e8a755c2e1b5::$classMap;

        }, null, ClassLoader::class);
    }
}
