<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita80806354c5569efee7225d5dfb1a033
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita80806354c5569efee7225d5dfb1a033::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita80806354c5569efee7225d5dfb1a033::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita80806354c5569efee7225d5dfb1a033::$classMap;

        }, null, ClassLoader::class);
    }
}