<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;

/**
 * VariationAttributeMap preset
 */
abstract class VariationAttributeMap 
{

	abstract public static function getSearchFactory(
		 $options
	);

}