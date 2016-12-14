<?php
namespace Plenty\Modules\Item\Unit\Models;


/**
 * The unit model including unit name
 */
abstract class Unit 
{
	public		$id;
	public		$position;
	public		$unitOfMeasurement;
	public		$isDecimalPlacesAllowed;
	public		$updatedAt;
	public		$createdAt;
	public		$langs;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}