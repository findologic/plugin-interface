<?php
namespace Plenty\Modules\Order\Shipping\Returns\Contracts;

use Plenty\Modules\Order\Shipping\Returns\Exceptions\ReturnsException;
use Plenty\Modules\Order\Shipping\Returns\Models\OrderReturns;
use Plenty\Modules\Order\Shipping\Returns\Models\RegisterReturnsResult;
use Plenty\Modules\Order\Shipping\Returns\Models\ReturnsServiceProvider;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ReturnsRepositoryContract is the interface for the order returns repository. This interface allows to register, assign to order and list order returns.
 */
interface ReturnsRepositoryContract 
{

	public function registerReturns(
		string $pluginName, 
		array $orderIds
	):RegisterReturnsResult;

	public function getReturnsLabelById(
		int $labelId, 
		array $with
	):PaginatedResult;

	public function assignLabel2Return(
		int $orderId, 
		int $returnsId
	):OrderReturns;

	public function getOrderReturns(
		int $orderId, 
		array $with = [], 
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

}