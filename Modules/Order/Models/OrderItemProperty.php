<?php
namespace Plenty\Modules\Order\Models;

use Carbon\Carbon;

/**
 * The order item property model.
 */
abstract class OrderItemProperty 
{
	public		$id;
	public		$orderItemId;
	public		$typeId;
	public		$subTypeId;
	public		$value;
	public		$createdAt;
	public		$updatedAt;
	public		$orderItem;
	public		$type;
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