<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55cfdcaf29ca6480a463a9e9ffc1523f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit55cfdcaf29ca6480a463a9e9ffc1523f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55cfdcaf29ca6480a463a9e9ffc1523f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55cfdcaf29ca6480a463a9e9ffc1523f::$classMap;

        }, null, ClassLoader::class);
    }
}
