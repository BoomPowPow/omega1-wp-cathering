<?php


return [
    
    /**
     * My plugin name
     */

    'pluginName' => 'Omega1 Wordpress Cathering',

    /**
     * My table prefix
     */

    'prefix' => 'O1WPCathering_',


    /**
     * The Herbert version constraint.
     */
    'constraint' => '~0.9.9',

    /**
     * Auto-load all required files.
     */
    'requires' => [
        __DIR__ . '/app/customPostTypes.php'
    ],
    
    /**
     * The tables to manage.
     */
    'tables' => [
    ],


    /**
     * Activate
     */
    'activators' => [
        __DIR__ . '/app/activate.php'
    ],

    /**
     * Deactivate
     */
    'deactivators' => [
        __DIR__ . '/app/deactivate.php'
    ],

    /**
     * The shortcodes to auto-load.
     */
    'shortcodes' => [
        __DIR__ . '/app/shortcodes.php'
    ],

    /**
     * The widgets to auto-load.
     */
    'widgets' => [
        __DIR__ . '/app/widgets.php'
    ],

    /**
     * The styles and scripts to auto-load.
     */
    'enqueue' => [
        __DIR__ . '/app/enqueue.php'
    ],

    /**
     * The routes to auto-load.
     */
    'routes' => [
        'Omega1WPCathering' => __DIR__ . '/app/routes.php'
    ],

    /**
     * The panels to auto-load.
     */
    'panels' => [
        'Omega1WPCathering' => __DIR__ . '/app/panels.php'
    ],

    /**
     * The APIs to auto-load.
     */
    'apis' => [
        'Omega1WPCathering' => __DIR__ . '/app/api.php'
    ],

    /**
     * The view paths to register.
     *
     * E.G: 'Omega1WPCathering' => __DIR__ . '/views'
     * can be referenced via @Omega1WPCathering/
     * when rendering a view in twig.
     */
    'views' => [
        'Omega1WPCathering' => __DIR__ . '/resources/views'
    ],

    /**
     * The view globals.
     */
    'viewGlobals' => [

    ],

    /**
     * The asset path.
     */
    'assets' => '/resources/assets/'

];
