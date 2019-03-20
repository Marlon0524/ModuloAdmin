<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitebecab7ac2a984ebf251bbec8aa9d45f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitebecab7ac2a984ebf251bbec8aa9d45f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitebecab7ac2a984ebf251bbec8aa9d45f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
