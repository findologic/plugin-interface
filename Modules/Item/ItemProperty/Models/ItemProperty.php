<?php
namespace Plenty\Modules\Item\ItemProperty\Models;

use Plenty\Modules\Item\Property\Models\PropertyItem;
use Plenty\Modules\Item\Property\Models\PropertySelection;

/**
 * ItemPropertyValue
 */
abstract class ItemProperty 
{
	public		$id;
	public		$itemId;
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