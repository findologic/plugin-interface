<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * To be written
 */
interface CatalogExportRepositoryContract 
{

	public function exportById(
		string $id
	):CatalogExportServiceContract;

}