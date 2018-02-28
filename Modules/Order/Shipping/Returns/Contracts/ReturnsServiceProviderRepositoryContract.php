<?php
namespace Plenty\Modules\Order\Shipping\Returns\Contracts;

use Plenty\Modules\Order\Shipping\Returns\Models\ReturnsServiceProvider;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ReturnsServiceProviderRepositoryContract is the interface for the returns service provider repository. This interface allows to list returns service providers.
 */
interface ReturnsServiceProviderRepositoryContract 
{

	public function getReturnsServiceProviderList(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = [], 
		array $with = []
	):PaginatedResult;

	public function findById(
		int $returnsServiceProviderId
	):ReturnsServiceProvider;

	public function findByName(
		string $returnsServiceProviderName
	):array;

	public function saveReturnsServiceProvider(
		string $pluginName
	):ReturnsServiceProvider;

	public function getReturnsServiceProvider(
		int $orderId
	):ReturnsServiceProvider;

	public function pluginList(
	);

}