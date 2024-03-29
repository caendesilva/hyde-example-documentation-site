<?php

/*
|--------------------------------------------------------------------------
| Application Config
|--------------------------------------------------------------------------
|
| This configuration file is for the Hyde Core, which is useful if you
| want to contribute to the source code. However, if you are looking
| to customize your static site, you are probably looking for the
| Hyde config located in `config/hyde.php`!
|
*/
return [

    /*
    |--------------------------------------------------------------------------
    | Application Name (Logo)
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => "

\033[34m     __ __        __   \033[33m ___  __ _____
\033[34m    / // /_ _____/ /__ \033[33m/ _ \/ // / _ \
\033[34m   / _  / // / _  / -_)\033[33m ___/ _  / ___/
\033[34m  /_//_/\_, /\_,_/\__/\033[33m_/  /_//_/_/
\033[34m       /___/
    
\033[0m",

    /*
    |--------------------------------------------------------------------------
    | Application Version
    |--------------------------------------------------------------------------
    |
    | This value determines the "version" your application is currently running
    | in. You may want to follow the "Semantic Versioning" - Given a version
    | number MAJOR.MINOR.PATCH when an update happens: https://semver.org.
    |
    */

    'version' => Hyde\Hyde::version(),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. This can be overridden using
    | the global command line "--env" option when calling commands.
    |
    | When using Hyde this setting should always be set to `production`.
    | However, when developing the Hyde Core, set it to `development`
    | in your .env to unlock the development commands.
    |
    */

    'env' => env('ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
        App\Providers\AppServiceProvider::class,
        Hyde\Framework\HydeServiceProvider::class,
        Hyde\Foundation\Providers\ViewServiceProvider::class,
        Hyde\Foundation\Providers\ConfigurationServiceProvider::class,
        Hyde\Console\ConsoleServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [
        'Hyde' => Hyde\Hyde::class,
        'Site' => \Hyde\Facades\Site::class,
        'Meta' => \Hyde\Facades\Meta::class,
        'Route' => \Hyde\Facades\Route::class,
        'Asset' => \Hyde\Facades\Asset::class,
        'Author' => \Hyde\Facades\Author::class,
        'Includes' => \Hyde\Support\Includes::class,
        'Features' => \Hyde\Facades\Features::class,
        'BladePage' => \Hyde\Pages\BladePage::class,
        'MarkdownPage' => \Hyde\Pages\MarkdownPage::class,
        'MarkdownPost' => \Hyde\Pages\MarkdownPost::class,
        'DocumentationPage' => \Hyde\Pages\DocumentationPage::class,
        'Filesystem' => \Hyde\Facades\Filesystem::class,
        'MarkdownCollection' => \Hyde\Framework\Features\DataCollections\Facades\MarkdownCollection::class,
    ],

];
