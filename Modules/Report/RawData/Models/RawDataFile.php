<?php
namespace Plenty\Modules\Report\RawData\Models;


/**
 * The report raw model
 */
abstract class RawDataFile 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$plentyIdHash;
	public		$dataName;
	public		$processStatus;
	public		$shouldProcess;
	public		$path;
	public		$createdAt;
	public		$dataCreatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}