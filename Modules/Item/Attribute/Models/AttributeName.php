<?php
namespace Plenty\Modules\Item\Attribute\Models;


/**
 * The AttributeName model including Attribute
 */
abstract class AttributeName 
{
	public		$attributeId;
	public		$lang;
	public		$name;
	public		$attribute;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}