<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita409f003ecd885b942f075d97a139b6b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pydio\\Access\\Meta\\Version\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pydio\\Access\\Meta\\Version\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'VersionControl' => 
            array (
                0 => __DIR__ . '/..' . '/pear/versioncontrol_git',
            ),
        ),
        'P' => 
        array (
            'PEAR' => 
            array (
                0 => __DIR__ . '/..' . '/pear/pear_exception',
            ),
        ),
        'C' => 
        array (
            'Console' => 
            array (
                0 => __DIR__ . '/..' . '/pear/console_getopt',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/pear/pear-core-minimal/src',
    );

    public static $classMap = array (
        'Console_Getopt' => __DIR__ . '/..' . '/pear/console_getopt/Console/Getopt.php',
        'OS_Guess' => __DIR__ . '/..' . '/pear/pear-core-minimal/src/OS/Guess.php',
        'PEAR' => __DIR__ . '/..' . '/pear/pear-core-minimal/src/PEAR.php',
        'PEAR_Error' => __DIR__ . '/..' . '/pear/pear-core-minimal/src/PEAR.php',
        'PEAR_ErrorStack' => __DIR__ . '/..' . '/pear/pear-core-minimal/src/PEAR/ErrorStack.php',
        'PEAR_Exception' => __DIR__ . '/..' . '/pear/pear_exception/PEAR/Exception.php',
        'PEAR_ExceptionTest' => __DIR__ . '/..' . '/pear/pear_exception/tests/PEAR/ExceptionTest.php',
        'Pydio\\Access\\Meta\\Version\\GitManager' => __DIR__ . '/../..' . '/src/GitManager.php',
        'System' => __DIR__ . '/..' . '/pear/pear-core-minimal/src/System.php',
        'VersionControl_Git' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git.php',
        'VersionControl_GitTest' => __DIR__ . '/..' . '/pear/versioncontrol_git/tests/VersionControl_GitTest.php',
        'VersionControl_Git_Component' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git/Component.php',
        'VersionControl_Git_ComponentTest' => __DIR__ . '/..' . '/pear/versioncontrol_git/tests/VersionControl_Git_ComponentTest.php',
        'VersionControl_Git_Exception' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git/Exception.php',
        'VersionControl_Git_Object' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git/Object.php',
        'VersionControl_Git_ObjectTest' => __DIR__ . '/..' . '/pear/versioncontrol_git/tests/VersionControl_Git_ObjectTest.php',
        'VersionControl_Git_Object_Blob' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git/Object/Blob.php',
        'VersionControl_Git_Object_BlobTest' => __DIR__ . '/..' . '/pear/versioncontrol_git/tests/VersionControl_Git_Object_BlobTest.php',
        'VersionControl_Git_Object_Commit' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git/Object/Commit.php',
        'VersionControl_Git_Object_CommitTest' => __DIR__ . '/..' . '/pear/versioncontrol_git/tests/VersionControl_Git_Object_CommitTest.php',
        'VersionControl_Git_Object_Tree' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git/Object/Tree.php',
        'VersionControl_Git_Object_TreeTest' => __DIR__ . '/..' . '/pear/versioncontrol_git/tests/VersionControl_Git_Object_TreeTest.php',
        'VersionControl_Git_Util_Command' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git/Util/Command.php',
        'VersionControl_Git_Util_CommandTest' => __DIR__ . '/..' . '/pear/versioncontrol_git/tests/VersionControl_Git_Util_CommandTest.php',
        'VersionControl_Git_Util_RevListFetcher' => __DIR__ . '/..' . '/pear/versioncontrol_git/VersionControl/Git/Util/RevListFetcher.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita409f003ecd885b942f075d97a139b6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita409f003ecd885b942f075d97a139b6b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita409f003ecd885b942f075d97a139b6b::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInita409f003ecd885b942f075d97a139b6b::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInita409f003ecd885b942f075d97a139b6b::$classMap;

        }, null, ClassLoader::class);
    }
}
