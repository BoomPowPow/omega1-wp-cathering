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


// Recipes
Capsule::schema()->create($prefix . "recipes", function($table)
{
    $table->increments('id');
    $table->string('name');
    $table->string('price');
});


// ItemRecipes
Capsule::schema()->create($prefix . "recipes_items", function($table)
{
    $table->increments('id');
    $table->foreign('items_id')->references('id')->on($prefix . "items");
    $table->foreign('recipes_id')->references('id')->on($prefix . "recipes");
    $table->decimal('quantity', 5, 2);
    $table->string('unit');
});


// Orders
Capsule::schema()->create($prefix . "orders", function($table)
{
    $table->increments('id');
    $table->string('receiver');
    $table->string('address');
    $table->string('city');
    $table->string('zipcode');
    $table->date('duedate');
    $table->time('duetime');
});


// RecipesOrders
Capsule::schema()->create($prefix . "orders_recipes", function($table)
{
    $table->increments('id');
    $table->foreign('recipes_id')->references('id')->on($prefix . "recipes");
    $table->foreign('orders_id')->references('id')->on($prefix . "orders");
    $table->mediumInteger('quantity');
});


// Invoices
Capsule::schema()->create($prefix . "invoices", function($table)
{
    $table->increments('id');
    $table->foreign('orders_id')->references('id')->on($prefix . "orders");
    $table->decimal('quantity', 5, 2);
    $table->decimal('price', 5, 2);
    $table->decimal('tps', 5, 2);
    $table->decimal('tvq', 5, 2);
    $table->decimal('total', 5, 2);
    $table->string('receiver');
    $table->string('address');
    $table->string('phone');
    $table->string('mail');
    $table->string('paytype');
});