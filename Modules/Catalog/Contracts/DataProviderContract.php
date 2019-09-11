<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * To be written
 */
interface DataProviderContract 
{

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