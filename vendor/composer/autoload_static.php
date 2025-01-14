<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita247cb4b69db3924b8f9b04f3521aac0
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        'fe62ba7e10580d903cc46d808b5961a4' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/helpers.php',
        'caf31cc6ec7cf2241cb6f12c226c3846' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/alias.php',
    );

    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jonathanraftery\\Bullhorn\\REST\\Client\\' => 37,
            'jonathanraftery\\Bullhorn\\REST\\Authentication\\' => 45,
        ),
        'W' => 
        array (
            'WPBullhornStaffing\\' => 19,
        ),
        'T' => 
        array (
            'Tightenco\\Collect\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jonathanraftery\\Bullhorn\\REST\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/jonathanraftery/bullhorn-rest-client/src/Client.php',
        ),
        'jonathanraftery\\Bullhorn\\REST\\Authentication\\' => 
        array (
            0 => __DIR__ . '/..' . '/jonathanraftery/bullhorn-auth-client/src',
        ),
        'WPBullhornStaffing\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Tightenco\\Collect\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Collect',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'jonathanraftery\\Bullhorn\\DataStore' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-auth-client/src/DataStore.php',
        'jonathanraftery\\Bullhorn\\JsonDataStore' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-auth-client/src/JsonDataStore.php',
        'jonathanraftery\\Bullhorn\\MemoryDataStore' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-auth-client/src/MemoryDataStore.php',
        'jonathanraftery\\Bullhorn\\Rest\\Authentication\\AuthorizationException' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-auth-client/src/AuthorizationException.php',
        'jonathanraftery\\Bullhorn\\Rest\\Authentication\\Client' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-auth-client/src/Client.php',
        'jonathanraftery\\Bullhorn\\Rest\\Authentication\\Exception\\InvalidRefreshTokenException' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-auth-client/src/InvalidRefreshTokenException.php',
        'jonathanraftery\\Bullhorn\\Rest\\Client' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-rest-client/src/Client.php',
        'jonathanraftery\\Bullhorn\\Rest\\Resources\\EventSubscription' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-rest-client/src/Resources/EventSubscription.php',
        'jonathanraftery\\Bullhorn\\Rest\\Resources\\JobOrders' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-rest-client/src/Resources/JobOrders.php',
        'jonathanraftery\\Bullhorn\\Rest\\Resources\\Resource' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-rest-client/src/Resources/Resource.php',
        'jonathanraftery\\Bullhorn\\WordpressDataStore' => __DIR__ . '/..' . '/jonathanraftery/bullhorn-auth-client/src/WordpressDataStore.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita247cb4b69db3924b8f9b04f3521aac0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita247cb4b69db3924b8f9b04f3521aac0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita247cb4b69db3924b8f9b04f3521aac0::$classMap;

        }, null, ClassLoader::class);
    }
}
