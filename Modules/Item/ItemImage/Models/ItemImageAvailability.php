<?php
namespace Plenty\Modules\Item\ItemImage\Models;


/**
 * ItemImageAvailability
 */
abstract class ItemImageAvailability 
{
	public		$imageId;
	public		$type;
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