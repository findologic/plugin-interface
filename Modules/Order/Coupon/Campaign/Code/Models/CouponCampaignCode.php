<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Code\Models;

use Carbon\Carbon;
use Plenty\Modules\Order\Coupon\Campaign\Models\CouponCampaign;

/**
 * The CouponCampaignCode model contains information about coupon codes. Each code belongs to one campaign only.
 */
abstract class CouponCampaignCode 
{
	public		$code;
	public		$campaignId;
	public		$disable;
	public		$consumed;
	public		$usedCount;
	public		$usedAmount;
	public		$generatedAt;
	public		$lastUsedAt;
	public		$consumedAt;
	public		$expiresAt;
	public		$campaign;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}