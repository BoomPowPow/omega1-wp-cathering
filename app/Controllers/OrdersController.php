<?php namespace Omega1WPCathering\Controllers;

// use Herber\Framework\Models\Post;
// use Herbert\Framework\Http;

class OrdersController
{
	public function show()
	{
		return view('@Omega1WPCathering/items.twig', [
		    'title' => 'Mes commandes'
		]);
	}
}