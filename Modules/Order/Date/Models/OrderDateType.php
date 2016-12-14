<?php
namespace Plenty\Modules\Order\Date\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The OrderDateType model.
 */
abstract class OrderDateType 
{
	public		$id;
	public		$isErasable;
	public		$position;
	public		$names;
	public		$orderDates;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}