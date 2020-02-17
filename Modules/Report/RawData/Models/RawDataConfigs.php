<?php
namespace Plenty\Modules\Report\RawData\Models;


/**
 * List of all saved raw data configurations
 */
abstract class RawDataConfigs 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$plentyIdHash;
	public		$configs;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}