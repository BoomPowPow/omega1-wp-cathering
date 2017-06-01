<?php

/** @var  \Herbert\Framework\Application $container */
/** @var  \Herbert\Framework\Http $http */
/** @var  \Herbert\Framework\Router $router */
/** @var  \Herbert\Framework\Enqueue $enqueue */
/** @var  \Herbert\Framework\Panel $panel */
/** @var  \Herbert\Framework\Shortcode $shortcode */
/** @var  \Herbert\Framework\Widget $widget */

use Illuminate\Database\Capsule\Manager as Capsule;
use Omega1WPCathering\Helper;

$prefix = Helper::get("prefix");

// Items
Capsule::schema()->create($prefix . "items", function($table)
{
    $table->increments('id');
    $table->string('name');
    $table->string('images');
});
