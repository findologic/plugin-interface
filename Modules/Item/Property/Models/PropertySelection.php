<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The PropertySelection including PropertyItem
 */
abstract class PropertySelection 
{
	public		$id;
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