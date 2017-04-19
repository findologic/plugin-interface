<?php
namespace Plenty\Modules\Item\VariationProperty\Models;

use Plenty\Modules\Item\Property\Models\Property;
use Plenty\Modules\Item\Property\Models\PropertySelection;
use Plenty\Modules\Item\Variation\Models\Variation;

/**
 * The property name of the variation
 */
abstract class VariationPropertyValueName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$propertyValueId;
	public		$lang;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}