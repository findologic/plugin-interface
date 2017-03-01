<?php
namespace Plenty\Modules\Order\Shipping\PackageType\Contracts;

use Plenty\Modules\Order\Shipping\PackageType\Models\ShippingPackageType;

/**
 * The ShippingPackageTypeRepositoryContract is the interface for the shipping package type repository. This interface allows to get shipping package type by ID.
 */
interface ShippingPackageTypeRepositoryContract 
{

	/**
	 * Get Shipping Package Type by an  ID
	 */
	public function findShippingPackageTypeById(
		int $shippingPackageTypeId
	):ShippingPackageType;

	/**
	 * Get all Shipping Shipping Package Types
	 */
	public function listShippingPackageTypes(
	):array;

}