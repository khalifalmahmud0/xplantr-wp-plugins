<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7821e5c0f53ab1e11693df7b4f99cb2 {
    public static $prefixLengthsPsr4 = array(
        'K' =>
        array(
            'KHALIF\\XDfmSHC\\INCLUDES\\' => 29,
            'KHALIF\\XDfmSHC\\ACTIONS\\DEACTIVATION\\' => 41,
            'KHALIF\\XDfmSHC\\ACTIONS\\ACTIVATION\\' => 39,
        ),
    );

    public static $prefixDirsPsr4 = array(
        'KHALIF\\XDfmSHC\\INCLUDES\\' =>
        array(
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'KHALIF\\XDfmSHC\\ACTIONS\\DEACTIVATION\\' =>
        array(
            0 => __DIR__ . '/../..' . '/actions/deactivation',
        ),
        'KHALIF\\XDfmSHC\\ACTIONS\\ACTIVATION\\' =>
        array(
            0 => __DIR__ . '/../..' . '/actions/activation',
        ),
    );

    public static function getInitializer(ClassLoader $loader) {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7821e5c0f53ab1e11693df7b4f99cb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7821e5c0f53ab1e11693df7b4f99cb2::$prefixDirsPsr4;
        }, null, ClassLoader::class);
    }
}