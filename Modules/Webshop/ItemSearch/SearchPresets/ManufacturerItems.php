<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\SortingHelper;

/**
 * ManufacturerItems preset
 */
abstract class ManufacturerItems 
{

	abstract public static function getSearchFactory(
		 $options
	);

}