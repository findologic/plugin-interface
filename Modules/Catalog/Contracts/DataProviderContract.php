<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * To be written
 */
interface DataProviderContract 
{

	public function getData(
		string $query = ""
	):array;

}