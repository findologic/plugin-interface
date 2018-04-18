<?php
namespace Plenty\Modules\Order\Transaction\Models;


/**
 * The order item transaction model.
 */
abstract class OrderItemTransaction 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderItemId;
	public		$quantity;
	public		$userId;
	public		$identification;
	public		$status;
	public		$receiptId;
	public		$warehouseLocationId;
	public		$batchBestBeforeDateId;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}