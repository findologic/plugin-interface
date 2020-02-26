<?php
namespace Plenty\Modules\Webshop\Template\Contracts;


/**
 * Register plugin config values for usage in core
 */
interface TemplateConfigRepositoryContract 
{

	public function registerConfigValue(
		string $key, 
		 $value
	):TemplateConfigRepositoryContract;

}