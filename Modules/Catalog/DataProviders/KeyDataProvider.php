<?php
namespace Plenty\Modules\Catalog\DataProviders;


/**
 * To be written
 */
abstract class KeyDataProvider 
{

	abstract public function getKey(
	):string;

	abstract public function getRows(
	):array;

}