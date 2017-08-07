<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbf30948dfcfdfe70af10ab2fbafb301
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '67c7e398cad8e9c2bfc8250e83245c5d' => __DIR__ . '/../..' . '/handle/__global.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'H' => 
        array (
            'Handle\\' => 7,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/model',
        ),
        'Handle\\' => 
        array (
            0 => __DIR__ . '/../..' . '/handle',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controller',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbf30948dfcfdfe70af10ab2fbafb301::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbf30948dfcfdfe70af10ab2fbafb301::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfbf30948dfcfdfe70af10ab2fbafb301::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}