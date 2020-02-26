<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;

/**
 * LiveShoppingItems preset
 */
abstract class LiveShoppingItems 
{

	abstract public static function getSearchFactory(
		 $options
	);

}