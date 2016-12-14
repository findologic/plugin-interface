<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The CouponCampaign model contains all information of a campaign.
 */
abstract class CouponCampaign 
{
	public		$id;
	public		$externalId;
	public		$name;
	public		$variable;
	public		$isPermittedForExternalReferrers;
	public		$includeShipping;
	public		$unusedCodesCount;
	public		$usedCodesCount;
	public		$endsAt;
	public		$startsAt;
	public		$minOrderValue;
	public		$codeDurationWeeks;
	public		$codeAssignment;
	public		$codeLength;
	public		$usage;
	public		$concept;
	public		$redeemType;
	public		$discountType;
	public		$itemDiscountToPay;
	public		$itemDiscountToBuy;
	public		$campaignType;
	public		$couponType;
	public		$description;
	public		$value;
	public		$codes;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}