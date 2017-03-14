<?php
namespace Plenty\Modules\Item\Search\Sort;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\BaseSorting;

/**
 * To be written
 */
abstract class NameSorting 
{

	abstract public function toArray(
	):array;

}