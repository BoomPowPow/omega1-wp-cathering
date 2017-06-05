<?php namespace Omega1WPCathering;

/** @var \Herbert\Framework\Panel $panel */

/*
|--------------------------------------------------------------------------
| Orders
|--------------------------------------------------------------------------
|
*/

$panel->add([
    'type'   => 'panel',
    'as'     => 'orders',
    'title'  => 'Commandes',
    'rename' => 'Mes commandes',
    'slug'   => 'Omega1WPCathering-orders',
    'order'  => '35.555',
    'uses'   => __NAMESPACE__ . '\Controllers\OrdersController@show'
]);


/*
|--------------------------------------------------------------------------
| Recipes
|--------------------------------------------------------------------------
|
*/

$panel->add([
    'type'   => 'panel',
    'as'     => 'recipes',
    'title'  => 'Recettes',
    'rename' => 'Mes recettes',
    'slug'   => 'Omega1WPCathering-recipes',
    'order'  => '35.555',
    'uses'   => __NAMESPACE__ . '\Controllers\RecipesController@show'
]);
    $panel->add([
        'type'   => 'sub-panel',
        'parent' => 'recipes',
        'as'     => 'addRecipe',
        'title'  => 'Ajouter',
        'slug'   => 'Omega1WPCathering-add-recipes',
        'uses'   => __NAMESPACE__ . '\Controllers\RecipesController@showAddPanel'
    ]);
