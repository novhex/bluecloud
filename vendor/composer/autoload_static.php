<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadceaa1db0bee4c54518799f485103d9
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Routes\\' => 7,
            'Router\\' => 7,
        ),
        'P' => 
        array (
            'Plugins\\' => 8,
            'Paginator\\' => 10,
        ),
        'F' => 
        array (
            'Fileuploader\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Routes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Router',
        ),
        'Plugins\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plug-ins',
        ),
        'Paginator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Paginator',
        ),
        'Fileuploader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Fileuploader',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HybridLogic' => 
            array (
                0 => __DIR__ . '/../..' . '/core/HybridLogic',
            ),
        ),
    );

    public static $classMap = array (
        'Bootstrap' => __DIR__ . '/../..' . '/core/Bootstrap.php',
        'Core\\Controller\\Controller' => __DIR__ . '/../..' . '/core/Controller.php',
        'Core\\View\\View' => __DIR__ . '/../..' . '/core/View.php',
        'Database\\DBConnection\\DBConnection' => __DIR__ . '/../..' . '/database/DBconnection.php',
        'Fileuploader\\Fileuploader' => __DIR__ . '/../..' . '/core/Fileuploader/Fileuploader.php',
        'FluentPDO' => __DIR__ . '/../..' . '/core/FluentPDO/FluentPDO.php',
        'Helpers\\Encryption_helpers' => __DIR__ . '/../..' . '/helpers/Encryption_helper.php',
        'Helpers\\Geocode_helper' => __DIR__ . '/../..' . '/helpers/Geocode_helper.php',
        'HybridLogic\\Validation\\ClientSide\\jQueryValidationRule' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/ClientSide/jQueryValidationRule.php',
        'HybridLogic\\Validation\\ClientSide\\jQueryValidator' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/ClientSide/jQueryValidator.php',
        'HybridLogic\\Validation\\Rule' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule.php',
        'HybridLogic\\Validation\\Rule\\Alpha' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/Alpha.php',
        'HybridLogic\\Validation\\Rule\\AlphaNumeric' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/AlphaNumeric.php',
        'HybridLogic\\Validation\\Rule\\AlphaSlug' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/AlphaSlug.php',
        'HybridLogic\\Validation\\Rule\\Email' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/Email.php',
        'HybridLogic\\Validation\\Rule\\Equal' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/Equal.php',
        'HybridLogic\\Validation\\Rule\\ExactLength' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/ExactLength.php',
        'HybridLogic\\Validation\\Rule\\IP' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/IP.php',
        'HybridLogic\\Validation\\Rule\\InArray' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/InArray.php',
        'HybridLogic\\Validation\\Rule\\Matches' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/Matches.php',
        'HybridLogic\\Validation\\Rule\\MaxLength' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/MaxLength.php',
        'HybridLogic\\Validation\\Rule\\MinLength' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/MinLength.php',
        'HybridLogic\\Validation\\Rule\\NotEmpty' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/NotEmpty.php',
        'HybridLogic\\Validation\\Rule\\NotEqual' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/NotEqual.php',
        'HybridLogic\\Validation\\Rule\\NumMax' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/NumMax.php',
        'HybridLogic\\Validation\\Rule\\NumMin' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/NumMin.php',
        'HybridLogic\\Validation\\Rule\\NumNatural' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/NumNatural.php',
        'HybridLogic\\Validation\\Rule\\NumRange' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/NumRange.php',
        'HybridLogic\\Validation\\Rule\\Number' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/Number.php',
        'HybridLogic\\Validation\\Rule\\Regex' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/Regex.php',
        'HybridLogic\\Validation\\Rule\\True' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/True.php',
        'HybridLogic\\Validation\\Rule\\URL' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Rule/URL.php',
        'HybridLogic\\Validation\\Validator' => __DIR__ . '/../..' . '/core/HybridLogic/HybridLogic/Validation/Validator.php',
        'Paginator\\Paginator' => __DIR__ . '/../..' . '/core/Paginator/Paginator.php',
        'Router\\Router' => __DIR__ . '/../..' . '/core/Router/Router.php',
        'Routes\\Routes' => __DIR__ . '/../..' . '/routes/Routelist.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadceaa1db0bee4c54518799f485103d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadceaa1db0bee4c54518799f485103d9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitadceaa1db0bee4c54518799f485103d9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitadceaa1db0bee4c54518799f485103d9::$classMap;

        }, null, ClassLoader::class);
    }
}
