<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse;

use Illuminate\Contracts\Support\Arrayable;

/**
 * to be written
 */
interface CollapseInterface 
{

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}