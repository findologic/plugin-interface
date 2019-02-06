<?php
namespace Plenty\Modules\ShopBuilder\Contracts;


/**
 * Contract for classes handling global settings for the ShopBuilder.
 */
interface GlobalSettingsHandler 
{

	/**
	 * Read values of global settings.
	 */
	public function readSettings(
	);

	/**
	 * Store values of global settings.
	 */
	public function writeSettings(
		 $values
	);

}