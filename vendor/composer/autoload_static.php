<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c036cdd1d28d9827166c85bb51017e4
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Icrewsystems\\WelcomeMail\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Icrewsystems\\WelcomeMail\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c036cdd1d28d9827166c85bb51017e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c036cdd1d28d9827166c85bb51017e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c036cdd1d28d9827166c85bb51017e4::$classMap;

        }, null, ClassLoader::class);
    }
}
