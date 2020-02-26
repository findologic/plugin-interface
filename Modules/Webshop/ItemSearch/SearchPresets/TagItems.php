<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;

/**
 * TagItems preset
 */
abstract class TagItems 
{

	abstract public static function getSearchFactory(
		 $options
	);

}