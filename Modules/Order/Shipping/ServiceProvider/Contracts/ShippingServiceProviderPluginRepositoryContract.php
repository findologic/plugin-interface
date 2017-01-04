<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Contracts;

use Plenty\Modules\Order\Shipping\ServiceProvider\Models\ShippingServiceProvider;
use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * The ShippingServiceProviderPluginRepositoryContract is the interface for the shipping service provider plugin repository. This interface allows to list shipping service provider plugins.
 */
interface ShippingServiceProviderPluginRepositoryContract 
{

	public function plugins(
	);

}