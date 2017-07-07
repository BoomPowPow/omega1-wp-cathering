<?php
namespace Omega1WPCathering\Controllers;

use Omega1WPCathering\Models\Recipes;
use Herbert\Framework\Http;
use Herbert\Framework\Notifier;

class RecipesController
{

	/**
	 * Display the recipes index
	 */
	public function show()
	{
		return view('@Omega1WPCathering/recipes.twig', [
		    'recipes' => $this->getRecipes()
		]);
	}

	/**
	 * Display the add recipe panel
	 */
	public function showAddPanel()
	{
		return view('@Omega1WPCathering/add-recipe.twig');
	}


	/**
	 * Get all the recipes
	 */
	protected function getRecipes()
	{
		return Recipes::all();
	}


	/**
	 * Add a new recipe
	 */
	public function store(Http $http)
	{
		$input = [
			'name'        => $http->get('name'),
			'price'       => $http->get('price'),
			'description' => $http->get('description')
		];

		// echo '<pre>'; print_r($input);
		// Recipes::create($input);
		return redirect_response(panel_url('RecipesController::show'));
	}


}
