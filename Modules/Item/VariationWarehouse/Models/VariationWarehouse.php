<?php
namespace Plenty\Modules\Item\VariationWarehouse\Models;


/**
 * Variation Warehouse
 */
abstract class VariationWarehouse 
{
	public		$variationId;
	public		$warehouseId;
	public		$warehouseZoneId;
	public		$storageLocationType;
	public		$reorderLevel;
	public		$maximumStock;
	public		$stockTurnoverInDays;
	public		$storageLocation;
	public		$stockBuffer;
	public		$lastUpdateTimestamp;
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}