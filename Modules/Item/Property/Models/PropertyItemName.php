<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The PropertyItemName including PropertyItem
 */
abstract class PropertyItemName 
{
	public		$propertyItemId;
	public		$lang;
	public		$name;
	public		$description;
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