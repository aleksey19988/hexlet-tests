<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f1fd0ee4798a42fc2b694125b98a714
{
    public static $files = array (
        '535af788f525df6bbd69ba56d5b158b4' => __DIR__ . '/../..' . '/src/StringUtils.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aleksey\\HexletTests\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aleksey\\HexletTests\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f1fd0ee4798a42fc2b694125b98a714::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f1fd0ee4798a42fc2b694125b98a714::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f1fd0ee4798a42fc2b694125b98a714::$classMap;

        }, null, ClassLoader::class);
    }
}