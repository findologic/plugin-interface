<?php
namespace Plenty\Modules\Order\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The order property sub-type model
 */
abstract class OrderPropertySubType 
{
	public		$id;
	public		$isErasable;
	public		$position;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}