<?php
namespace Plenty\Modules\Report\Contracts;

use Plenty\Modules\Cloud\Storage\Models\StorageObject;
use Plenty\Modules\Report\Models\RawData;
use Plenty\Modules\Report\Models\RawDataConfigs;
use Plenty\Modules\Report\Models\RawDataCreator;
use Plenty\Modules\Report\Models\RawDataSearchResult;

/**
 * This interface allows you to get a list of generated raw data files
 */
interface RawDataRepositoryContract 
{

	/**
	 * Get list of raw data. Valid filter combinations: (dataName), (dataName & processStatus), (createdAtTimestamp)
	 */
	public function searchRawData(
		string $dataName, 
		int $createdAtTimestamp, 
		string $processStatus, 
		int $itemsPerPage = 20, 
		string $sortOrder = "asc", 
		string $after = ""
	):RawDataSearchResult;

	/**
	 * Get a raw data file from the storage, the storage path of the file must be specified.
	 */
	public function getRawDataFile(
		string $path
	);

	/**
	 * Get list of all raw data creators
	 */
	public function getRawDataCreatorModels(
	):array;

	/**
	 * Returns list of all saved configurations
	 */
	public function getRawDataConfigs(
	):RawDataConfigs;

	/**
	 * Resets all saved raw data configurations with given data
	 */
	public function updateRawDataConfigs(
		array $data
	):RawDataConfigs;

}