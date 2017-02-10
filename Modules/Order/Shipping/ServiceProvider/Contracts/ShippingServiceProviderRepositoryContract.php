<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Contracts;

use Plenty\Modules\Order\Shipping\ServiceProvider\Models\ShippingServiceProvider;
use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * The ShippingServiceProviderRepositoryContract is the interface for the shipping provider repository. This interface allows to list shipping providers.
 */
interface ShippingServiceProviderRepositoryContract 
{

	/**
	 * Lists shipping service providers.
	 */
	public function all(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * Gets a shipping service provider. The ID of the shipping service provider must be specified.
	 */
	public function find(
		int $shippingServiceProviderId
	):ShippingServiceProvider;

}