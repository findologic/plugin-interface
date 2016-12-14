<?php
namespace Plenty\Modules\Item\ItemImage\Models;


/**
 * ItemImageName
 */
abstract class ItemImageName 
{
	public		$imageId;
	public		$lang;
	public		$name;
	public		$alternate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}