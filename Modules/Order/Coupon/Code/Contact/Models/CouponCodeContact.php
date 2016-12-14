<?php
namespace Plenty\Modules\Order\Coupon\Code\Contact\Models;

use Carbon\Carbon;

/**
 * The CouponCodeContact model.
 */
abstract class CouponCodeContact 
{
	public		$code;
	public		$contactId;
	public		$openAmount;
	public		$redeemCount;
	public		$updatedAt;
	public		$campaignId;
	public		$externalTransactionId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}