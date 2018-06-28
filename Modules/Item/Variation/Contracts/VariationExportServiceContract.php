<?php
namespace Plenty\Modules\Item\Variation\Contracts;

use Plenty\Modules\Item\Variation\Services\ExportPreloadValue\ExportPreloadValue;

/**
 * Enhances the loading speed.
 */
interface VariationExportServiceContract 
{

	public function addPreloadTypes(
		array $types
	);

	public function preload(
		array $values
	):array;

	public function getData(
		string $dataType, 
		int $variationId
	);

}