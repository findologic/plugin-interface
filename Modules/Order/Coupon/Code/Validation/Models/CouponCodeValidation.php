<?php
namespace Plenty\Modules\Order\Coupon\Code\Validation\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Coupon\Campaign\Models\CouponCampaign;

/**
 * The CouponCodeValidation data model contains all data necessary for validating a coupon.
 */
abstract class CouponCodeValidation 
{
	public		$campaignId;
	public		$validationType;
	public		$items;
	public		$contactId;
	public		$couponCode;
	public		$currency;
	public		$referrer;
	public		$salesDiscount;
	public		$salesDiscountNet;
	public		$itemDiscount;
	public		$itemDiscountNet;
	public		$shippingDiscount;
	public		$shippingDiscountNet;
	public		$usedVatFields;
	public		$restCouponAmount;
	public		$checkedItems;
	public		$validateParams;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}