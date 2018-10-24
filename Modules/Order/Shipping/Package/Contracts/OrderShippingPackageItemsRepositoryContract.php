<?php
namespace Plenty\Modules\Order\Shipping\Package\Contracts;

use Plenty\Modules\Order\Shipping\Package\Models\OrderShippingPackageItems;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * Create and get items in packages from order
 */
interface OrderShippingPackageItemsRepositoryContract 
{

	/**
	 * Get items for a package
	 */
	public function getItemsForPackage(
		int $packageId
	):OrderShippingPackageItems;

	/**
	 * Get items for an order
	 */
	public function getItemsFromPackagesForOrder(
		int $orderId
	):OrderShippingPackageItems;

	/**
	 * Create items for a package
	 */
	public function createItemsForPackageOrder(
		array $data, 
		int $packageId = 0
	):array;

	/**
	 * Update items in a package
	 */
	public function updateItemsFromPackage(
		int $packageId, 
		int $itemId, 
		int $variationId, 
		array $data
	):int;

	/**
	 * Delete a variation of an item from package in order
	 */
	public function deleteItemsFromPackage(
		int $packageId, 
		int $itemId, 
		int $variationId
	):DeleteResponse;

}