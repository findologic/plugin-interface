<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\SortingHelper;

/**
 * SearchSuggestions preset
 */
abstract class SearchSuggestions 
{

	abstract public static function getSearchFactory(
		 $options
	);

}