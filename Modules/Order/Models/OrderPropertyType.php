<?php
namespace Plenty\Modules\Order\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The order property type model. Each order has a type and can have an additional sub-type.
 */
abstract class OrderPropertyType 
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