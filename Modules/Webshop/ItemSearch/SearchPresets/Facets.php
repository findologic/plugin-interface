<?php
namespace Plenty\Modules\Webshop\ItemSearch\SearchPresets;

use Plenty\Modules\Webshop\ItemSearch\Factories\FacetSearchFactory;

/**
 * Facet preset
 */
abstract class Facets 
{

	abstract public static function getSearchFactory(
		 $options
	);

}