<?php
namespace Plenty\Modules\Order\Coupon\Campaign\Code\Contracts;

use Plenty\Modules\Order\Coupon\Campaign\Code\Models\CouponCampaignCode;

/**
 * This interface allows you to get and create coupon codes.
 */
interface CouponCampaignCodeRepositoryContract 
{

	/**
	 * Gets a coupon code. The code string must be specified.
	 */
	public function getByCode(
		string $code, 
		array $with = []
	):CouponCampaignCode;

	/**
	 * Creates a coupon code. The ID of the campaign must be specified. A code can optionally be specified. A random code will be generated if the code is not specified. A coupon value can also be optionally specified. The value of the campaign will be used if no individual value is specified.
	 */
	public function create(
		array $data
	):CouponCampaignCode;

}