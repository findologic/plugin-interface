<?php
namespace Plenty\Modules\Order\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Accounting\Vat\Models\Vat;
use Carbon\Carbon;
use Plenty\Modules\Order\Date\Models\OrderItemDate;

/**
 * The order item model. Items, shipping costs, coupons, surcharges etc. are all displayed as order items.
 */
abstract class OrderItem 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$referrerId;
	public		$itemVariationId;
	public		$quantity;
	public		$orderItemName;
	public		$attributeValues;
	public		$shippingProfileId;
	public		$countryVatId;
	public		$vatField;
	public		$vatRate;
	public		$createdAt;
	public		$updatedAt;
	public		$order;
	public		$type;
	public		$countryVat;
	public		$amounts;
	public		$properties;
	public		$orderProperties;
	public		$dates;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}