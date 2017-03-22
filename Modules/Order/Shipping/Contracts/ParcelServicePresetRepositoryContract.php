<?php
namespace Plenty\Modules\Order\Shipping\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Order\Shipping\ParcelService\Models\ParcelServicePreset;

/**
 * The ParcelServicePresetRepositoryContract is the interface for the shipping profile repository. This interface allows to get a shipping profile by the ID or list all shipping profiles.
 */
interface ParcelServicePresetRepositoryContract 
{

	/**
	 * Lists shipping profiles.
	 */
	public function getPresetList(
		array $columns = [], 
		string $parcelServiceName = null, 
		string $with = null
	):array;

	/**
	 * Gets a shipping profile. The ID of the shipping profile must be specified.
	 */
	public function getPresetById(
		int $presetId, 
		array $columns = []
	):ParcelServicePreset;

	/**
	 * Calculate shipping costs and list last weighted preset combinations.
	 */
	public function getLastWeightedPresetCombinations(
		Basket $basket, 
		int $contactClass, 
		array $customParams = []
	):array;

}