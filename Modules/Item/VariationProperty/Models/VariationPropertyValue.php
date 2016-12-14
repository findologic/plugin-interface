<?php
namespace Plenty\Modules\Item\VariationProperty\Models;

use Plenty\Modules\Item\Property\Models\PropertyItem;
use Plenty\Modules\Item\Property\Models\PropertySelection;

/**
 * The VariationPropertyValue
 */
abstract class VariationPropertyValue 
{
	public		$id;
	public		$variationId;
	public		$propertyItemId;
	public		$propertySelectionId;
	public		$valueInt;
	public		$valueFloat;
	public		$valueFile;
	public		$surcharge;
	public		$propertyItem;
	public		$propertySelection;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}