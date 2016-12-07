<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d2188bb1409bbee0c7abd3744c203b1
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mpyw\\Cowitter\\' => 14,
            'mpyw\\Co\\' => 8,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mpyw\\Cowitter\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpyw/cowitter/src',
        ),
        'mpyw\\Co\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpyw/co/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d2188bb1409bbee0c7abd3744c203b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d2188bb1409bbee0c7abd3744c203b1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}