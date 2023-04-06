<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc3f3a75545b97c8737e054dad2db7d70
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc3f3a75545b97c8737e054dad2db7d70', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc3f3a75545b97c8737e054dad2db7d70', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc3f3a75545b97c8737e054dad2db7d70::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
