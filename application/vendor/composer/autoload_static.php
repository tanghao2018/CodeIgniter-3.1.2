<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4df6d5b342ab0084c9b174c82589912
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/class',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitc4df6d5b342ab0084c9b174c82589912::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
