<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The storage shelf model
 */
abstract class Shelf 
{
	public		$id;
	public		$rackId;
	public		$name;
	public		$level;
	public		$rack;
	public		$storageLocations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}