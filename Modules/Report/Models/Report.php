<?php
namespace Plenty\Modules\Report\Models;


/**
 * Represents the configuration of a report and its key figures.
 */
abstract class Report 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$plentyIdHash;
	public		$reportName;
	public		$updatedAt;
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}