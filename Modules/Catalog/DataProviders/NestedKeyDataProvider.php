<?php
namespace Plenty\Modules\Catalog\DataProviders;

use Plenty\Modules\Catalog\Contracts\NestedDataProviderContract;

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

	abstract public function getNestedData(
		string $parentId, 
		string $query = ""
	):array;

	abstract public function getRows(
	):array;

	abstract public function getDataByValue(
		string $id
	):array;

}