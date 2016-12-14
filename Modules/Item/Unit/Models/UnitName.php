<?php
namespace Plenty\Modules\Item\Unit\Models;


/**
 * The unit name model including the unit
 */
abstract class UnitName 
{
	public		$unitId;
	public		$lang;
	public		$name;
	public		$unit;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}