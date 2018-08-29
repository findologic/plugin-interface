<?php
namespace Plenty\Modules\Catalog\DataProviders;

use Plenty\Modules\Catalog\Contracts\DataProviderContract;

/**
 * To be written
 */
abstract class BaseDataProvider 
{

	abstract public function getRows(
	):array;

}