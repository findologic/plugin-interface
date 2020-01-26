<?php
namespace Plenty\Modules\Report\Models;


/**
 * The report raw data creator model
 */
abstract class RawDataCreator 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$dataName;
	public		$fileFormat;
	public		$limitPage;
	public		$limitDay;
	public		$earliestPossibleDataDate;
	public		$deleteRawDataAfterDaysMinimum;
	public		$deleteRawDataAfterDaysMaximum;
	public		$filterType;
	public		$dataUpdatedAtColumnName;
	public		$defaultActive;
	public		$interval;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}