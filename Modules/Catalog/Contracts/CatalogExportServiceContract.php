<?php
namespace Plenty\Modules\Catalog\Contracts;

use Carbon\Carbon;
use Plenty\Modules\Catalog\Models\CatalogExportResult;

/**
 * To be written
 */
interface CatalogExportServiceContract 
{

	public function setAdditionalFields(
		array $additionalFields
	);

	public function addMutator(
		callable $mutator
	);

	public function setSettings(
		array $settings
	);

	public function setNumberOfDocumentsPerShard(
		int $numberOfDocumentsPerShard
	);

	public function setUpdatedSince(
		Carbon $timestamp
	);

	public function getResult(
	):CatalogExportResult;

}