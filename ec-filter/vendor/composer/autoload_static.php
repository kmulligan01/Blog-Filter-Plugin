<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1038cefb049cd6e5054ebcbebfa81c6
{
    public static $files = array (
        '1db9a602f20508d50525f9dad168786f' => __DIR__ . '/..' . '/htmlburger/carbon-field-icon/core/bootstrap.php',
        '6632f90381dd49c5fe745d09406b9abb' => __DIR__ . '/..' . '/htmlburger/carbon-field-number/field.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'Carbon_Fields\\' => 14,
            'Carbon_Field_Number\\' => 20,
            'Carbon_Field_Icon\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
        'Carbon_Field_Number\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-field-number/core',
        ),
        'Carbon_Field_Icon\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-field-icon/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TDP\\OptionsKit' => __DIR__ . '/..' . '/wp-user-manager/wp-optionskit/wp-optionskit.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1038cefb049cd6e5054ebcbebfa81c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1038cefb049cd6e5054ebcbebfa81c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1038cefb049cd6e5054ebcbebfa81c6::$classMap;

        }, null, ClassLoader::class);
    }
}
