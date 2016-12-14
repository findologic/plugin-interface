<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The PropertyMarketComponent including PropertyItem
 */
abstract class PropertyMarketComponent 
{
	public		$propertyItemId;
	public		$componentId;
	public		$marketReference;
	public		$externalComponent;
	public		$property;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}