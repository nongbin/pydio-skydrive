<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit372b328ed4e8c24802cef8d197cccc12
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pydio\\Mq\\Core\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pydio\\Mq\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Pydio\\Mq\\Core\\Message\\ConsumeChannelMessage' => __DIR__ . '/../..' . '/src/Message/ConsumeChannelMessage.php',
        'Pydio\\Mq\\Core\\MqManager' => __DIR__ . '/../..' . '/src/MqManager.php',
        'Pydio\\Mq\\Core\\OptionsHelper' => __DIR__ . '/../..' . '/src/OptionsHelper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit372b328ed4e8c24802cef8d197cccc12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit372b328ed4e8c24802cef8d197cccc12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit372b328ed4e8c24802cef8d197cccc12::$classMap;

        }, null, ClassLoader::class);
    }
}
