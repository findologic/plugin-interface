<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * To be written
 */
interface CatalogContentRepositoryContract 
{

	public function get(
		string $id
	):array;

	public function update(
		string $id, 
		array $data
	):array;

}