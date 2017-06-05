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

/*
|--------------------------------------------------------------------------
| Drop tables
|--------------------------------------------------------------------------
|
*/

$prefix = Helper::get('prefix');

// Capsule::schema()->dropIfExists('recipes');
// Capsule::schema()->dropIfExists('recipes_items');
// Capsule::schema()->dropIfExists('orders');
// Capsule::schema()->dropIfExists('orders_recipes');
// Capsule::schema()->dropIfExists('invoices');