<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Dummy\VariationCatalogExportType;

/**
 * To be written
 */
interface TemplateContainerContract 
{

	public function register(
		string $name, 
		string $type, 
		string $providerClass = "", 
		string $exportType = "Plenty\Modules\Catalog\Dummy\VariationCatalogExportType"
	):TemplateContract;

	public function getTemplates(
	):array;

	public function getTemplate(
		string $identifier
	):TemplateContract;

}