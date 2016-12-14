<?php
namespace Plenty\Modules\Item\UnitCombination\Models;

use Plenty\Modules\Item\Unit\Models\Unit;

/**
 * The unitCombination model
 */
abstract class UnitCombination 
{
	public		$id;
	public		$unitId;
	public		$content;
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