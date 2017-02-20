<?php
namespace Plenty\Plugin;


/**
 * Service provider for plugins
 */
abstract class ServiceProvider 
{

	/**
	 * Add a new middleware to end of the stack if it does not already exist.
	 */
	public function addGlobalMiddleware(
		string $middleware
	)
	{
		return null;
	}

	/**
	 * Register the service provider.
	 */
	abstract public function register(
	);

	public function getApplication(
	):\Plenty\Plugin\Application
	{
		return null;
	}

	public function getEventDispatcher(
	):\Plenty\Plugin\Events\Dispatcher
	{
		return null;
	}

}