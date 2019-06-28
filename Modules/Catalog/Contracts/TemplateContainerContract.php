<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * To be written
 */
interface TemplateContainerContract 
{

	public function register(
		string $name, 
		string $type, 
		string $providerClass = ""
	):TemplateContract;

	public function getTemplates(
	):array;

	public function getTemplate(
		string $identifier
	):TemplateContract;

}