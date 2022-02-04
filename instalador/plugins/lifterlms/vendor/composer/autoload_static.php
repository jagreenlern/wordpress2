<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7524269aef751a8132232ba8822fcab
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7524269aef751a8132232ba8822fcab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7524269aef751a8132232ba8822fcab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
