<?php
namespace Plenty\Modules\Fulfillment\Picklist\Models;


/**
 * PickingOrderItem
 */
abstract class PickingOrderItem 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$pickingOrderId;
	public		$orderItemId;
	public		$processState;
	public		$processDate;
	public		$processUserId;
	public		$comment;
	public		$quantity;
	public		$itemId;
	public		$holdingArea;
	public		$warehouseId;
	public		$orderIdList;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}