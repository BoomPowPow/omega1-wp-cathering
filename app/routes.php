<?php namespace Omega1WPCathering;

/** @var \Herbert\Framework\Router $router */

$router->get([
    'as' => 'storeRecipe',
    'uri' => '/recipe/store',
    'uses' => __NAMESPACE__ . '\Controllers\RecipesController@store'
]);
