<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfd5bdaf262da3030b2b7df28577bd00
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Genesis\\CustomBlocksPro\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Genesis\\CustomBlocksPro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/php',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Genesis\\CustomBlocksPro\\Admin\\Admin' => __DIR__ . '/../..' . '/php/Admin/Admin.php',
        'Genesis\\CustomBlocksPro\\Admin\\Settings' => __DIR__ . '/../..' . '/php/Admin/Settings.php',
        'Genesis\\CustomBlocksPro\\Admin\\Subscription' => __DIR__ . '/../..' . '/php/Admin/Subscription.php',
        'Genesis\\CustomBlocksPro\\Admin\\SubscriptionResponse' => __DIR__ . '/../..' . '/php/Admin/SubscriptionResponse.php',
        'Genesis\\CustomBlocksPro\\Blocks\\Asset' => __DIR__ . '/../..' . '/php/Blocks/Asset.php',
        'Genesis\\CustomBlocksPro\\Blocks\\Controls\\ClassicText' => __DIR__ . '/../..' . '/php/Blocks/Controls/ClassicText.php',
        'Genesis\\CustomBlocksPro\\Blocks\\Controls\\Post' => __DIR__ . '/../..' . '/php/Blocks/Controls/Post.php',
        'Genesis\\CustomBlocksPro\\Blocks\\Controls\\Repeater' => __DIR__ . '/../..' . '/php/Blocks/Controls/Repeater.php',
        'Genesis\\CustomBlocksPro\\Blocks\\Controls\\RichText' => __DIR__ . '/../..' . '/php/Blocks/Controls/RichText.php',
        'Genesis\\CustomBlocksPro\\Blocks\\Controls\\Taxonomy' => __DIR__ . '/../..' . '/php/Blocks/Controls/Taxonomy.php',
        'Genesis\\CustomBlocksPro\\Blocks\\Controls\\User' => __DIR__ . '/../..' . '/php/Blocks/Controls/User.php',
        'Genesis\\CustomBlocksPro\\Blocks\\Loop' => __DIR__ . '/../..' . '/php/Blocks/Loop.php',
        'Genesis\\CustomBlocksPro\\Blocks\\RepeaterFilter' => __DIR__ . '/../..' . '/php/Blocks/RepeaterFilter.php',
        'Genesis\\CustomBlocksPro\\Plugin' => __DIR__ . '/../..' . '/php/Plugin.php',
        'Genesis\\CustomBlocksPro\\PostTypes\\BlockPost' => __DIR__ . '/../..' . '/php/PostTypes/BlockPost.php',
        'Genesis\\CustomBlocksPro\\Util' => __DIR__ . '/../..' . '/php/Util.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbfd5bdaf262da3030b2b7df28577bd00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbfd5bdaf262da3030b2b7df28577bd00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbfd5bdaf262da3030b2b7df28577bd00::$classMap;

        }, null, ClassLoader::class);
    }
}
