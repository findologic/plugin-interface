<?php
namespace Plenty\Modules\Catalog\DataProviders;

use Plenty\Modules\Catalog\Contracts\NestedDataProviderContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * To be written
 */
abstract class NestedKeyDataProvider 
{

	abstract public function getKey(
	):string;

	abstract public function getNestedRows(
		 $parentId
	):array;

	abstract public function getMetaData(
	);

	abstract public function getNestedData(
		string $parentId, 
		string $query = "", 
		array $meta = []
	):array;

	abstract public function getRows(
	):array;

	abstract public function setTemplate(
		TemplateContract $template
	);

	abstract public function setMapping(
		array $mapping
	);

	abstract public function getDataByValue(
		string $id
	):array;

}