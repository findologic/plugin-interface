<?php
namespace Plenty\Modules\Order\Date\Models;

use Plenty\Modules\Order\Models\Order;
use Carbon\Carbon;

/**
 * The OrderDate model.
 */
abstract class OrderDate 
{
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$date;
	public		$createdAt;
	public		$updatedAt;
	public		$order;
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