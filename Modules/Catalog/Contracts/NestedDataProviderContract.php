<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * To be written
 */
interface NestedDataProviderContract 
{

	public function getNestedData(
		string $parentId, 
		string $query = "", 
		array $meta = []
	):array;

	public function getDataByValue(
		string $id
	):array;

	public function getData(
		string $query = ""
	):array;

	public function setTemplate(
		TemplateContract $template
	);

	public function setMapping(
		array $mapping
	);

}