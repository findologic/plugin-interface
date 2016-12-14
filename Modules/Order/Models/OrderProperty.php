<?php
namespace Plenty\Modules\Order\Models;

use Carbon\Carbon;

/**
 * The order properties model. Each order property has a type and can have an additional sub-type.
 */
abstract class OrderProperty 
{
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$subTypeId;
	public		$value;
	public		$createdAt;
	public		$updatedAt;
	public		$order;
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