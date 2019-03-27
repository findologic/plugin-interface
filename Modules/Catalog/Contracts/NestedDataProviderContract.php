<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * To be written
 */
interface NestedDataProviderContract 
{

	public function getNestedData(
		string $parentId, 
		string $query = ""
	):array;

	public function getDataByValue(
		string $id
	):array;

	public function getData(
		string $query = ""
	):array;

}