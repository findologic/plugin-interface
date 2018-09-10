<?php
namespace Plenty\Modules\ShopBuilder\Contracts;


/**
 * Contract for content presets
 */
interface ContentPreset 
{

	/**
	 * Get the widget configurations of the presets to be assigned to the created content.
	 */
	public function getWidgets(
	);

}