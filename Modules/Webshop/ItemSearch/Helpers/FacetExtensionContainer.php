<?php
namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Modules\Webshop\ItemSearch\Contracts\FacetExtension;
use Plenty\Plugin\Events\Dispatcher;

/**
 * FacetExtensionContainer
 */
abstract class FacetExtensionContainer 
{

	abstract public function getFacetExtensions(
	):array;

	abstract public function addFacetExtension(
		FacetExtension $facetExtension
	);

}