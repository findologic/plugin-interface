<?php
namespace Plenty\Plugin;

use Illuminate\Routing\Router;

/**
 * Route service provider
 */
abstract class RouteServiceProvider 
{

	public function getApplication(
	):Application
	{
		return null;
	}

	public function getEventDispatcher(
	):Events\Dispatcher
	{
		return null;
	}

}