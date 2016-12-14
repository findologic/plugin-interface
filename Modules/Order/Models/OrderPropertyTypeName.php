<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order property type name model.
 */
abstract class OrderPropertyTypeName 
{
	public		$id;
	public		$typeId;
	public		$name;
	public		$lang;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}