<?php
namespace Plenty\Modules\Item\VariationSupplier\Models;


/**
 * Variation Supplier
 */
abstract class VariationSupplier 
{
	public		$id;
	public		$variationId;
	public		$supplierId;
	public		$purchasePrice;
	public		$minimumOrderValue;
	public		$itemNumber;
	public		$lastPriceQuery;
	public		$deliveryTimeInDays;
	public		$discount;
	public		$discountable;
	public		$packagingUnit;
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