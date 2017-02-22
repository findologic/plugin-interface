<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Contracts;

use Plenty\Modules\Order\Shipping\ServiceProvider\Models\ShippingServiceProvider;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ShippingServiceProviderPluginRepositoryContract is the interface for the shipping service provider plugin repository. This interface allows to list shipping service provider plugins.
 */
interface ShippingServiceProviderPluginRepositoryContract 
{

	public function plugins(
	);

}