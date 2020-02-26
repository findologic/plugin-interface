<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;


/**
 * SearchPreset interface
 */
interface SearchPreset 
{

	/**
	 * Get the search factory from the preset.
	 */
	public static function getSearchFactory(
		array $options
	);

}