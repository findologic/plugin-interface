<?php
namespace Plenty\Modules\Item\ItemSerialNumber\Models;


/**
 * The item serial number model
 */
abstract class ItemSerialNumber 
{

	const ITEMS_PER_PAGE = 100;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$orderItemId;
	public		$itemId;
	public		$serialNumber;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}