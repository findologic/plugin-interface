<?php
namespace Plenty\Modules\Report\Models;


/**
 * The report raw data config model
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