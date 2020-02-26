<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;
use Plenty\Modules\Webshop\ItemSearch\Helpers\SortingHelper;

/**
 * SearchItems preset
 */
abstract class SearchItems 
{

	abstract public static function getSearchFactory(
		 $options
	);

}