<?php namespace Omega1WPCathering\Controllers;

use Omega1WPCathering\Models\Recipes;

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
	protected function add()
	{
		return Recipes::all();
	}


}