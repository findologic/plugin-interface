<?php
namespace Plenty\Modules\Catalog\DataProviders;

use Plenty\Modules\Catalog\Contracts\DataProviderContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * To be written
 */
abstract class BaseDataProvider 
{

	abstract public function getRows(
	):array;

	abstract public function setTemplate(
		TemplateContract $template
	);

	abstract public function setMapping(
		array $mapping
	);

}