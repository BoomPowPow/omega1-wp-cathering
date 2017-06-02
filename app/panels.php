<?php namespace Omega1WPCathering;

/** @var \Herbert\Framework\Panel $panel */

// Main Panel
$panel->add([
    'type'   => 'panel',
    'as'     => 'mainPanel',
    'title'  => 'Service traiteur',
    'rename' => 'General',
    'slug'   => 'Omega1WPCathering-index',
    'order'  => '35.555',
    'uses'   => function()
    {
        return 'Hello World';
    }
]);

// Orders Sub-Panel
$panel->add([
    'type'   => 'sub-panel',
    'parent' => 'mainPanel',
    'as'     => 'orders',
    'title'  => 'Mes commandes',
    'slug'   => 'Omega1WPCathering-orders',
    'uses'   => __NAMESPACE__ . '\Controllers\AdminController@showOrders'
]);
// Recipe Sub-Panel
$panel->add([
    'type'   => 'sub-panel',
    'parent' => 'mainPanel',
    'as'     => 'recipes',
    'title'  => 'Mes recettes',
    'slug'   => 'Omega1WPCathering-recipes',
    'uses'   => __NAMESPACE__ . '\Controllers\AdminController@showRecipes'
]);
// Items Sub-Panel
$panel->add([
    'type'   => 'sub-panel',
    'parent' => 'mainPanel',
    'as'     => 'items',
    'title'  => 'Liste des ingredients',
    'slug'   => 'Omega1WPCathering-items',
    'uses'   => __NAMESPACE__ . '\Controllers\AdminController@showItems'
]);



