<?php
namespace Plenty\Modules\Item\VariationProperty\Models;

use Plenty\Modules\Item\Property\Models\PropertyItem;

/**
 * The VariationPropertyValue
 */
abstract class VariationProperty 
{
	public		$variationId;
	public		$propertyItemId;
	public		$propertyItem;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}