<?php
namespace Plenty\Modules\Report\Models;


/**
 * The report raw data config model
 */
abstract class RawDataConfig 
{
	public		$dataName;
	public		$active;
	public		$deleteRawDataAfterDays;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}