<?php
namespace Plenty\Modules\Item\VariationStock\Models;


/**
 * The variation stock movement model.
 */
abstract class VariationStockMovement 
{
	public		$id;
	public		$itemId;
	public		$variationId;
	public		$warehouseId;
	public		$reasonString;
	public		$attributeValues;
	public		$processRowId;
	public		$quantity;
	public		$reason;
	public		$createdAt;
	public		$processRowType;
	public		$storageLocationName;
	public		$warehouseName;
	public		$purchasePrice;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}