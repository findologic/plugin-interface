<?php
namespace Plenty\Modules\Report\RawData\Models;


/**
 * The report raw data config model
 */
abstract class RawDataConfig 
{
	public		$dataName;
	public		$active;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}