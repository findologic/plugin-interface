<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order property sub type name model
 */
abstract class OrderPropertySubTypeName 
{
	public		$id;
	public		$subTypeId;
	public		$name;
	public		$lang;
	public		$subType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}