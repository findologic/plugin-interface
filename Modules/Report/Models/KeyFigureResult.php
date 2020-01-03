<?php
namespace Plenty\Modules\Report\Models;


/**
 * Represents a key figure result
 */
abstract class KeyFigureResult 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$configId;
	public		$scaleBasis;
	public		$dataGroup;
	public		$interval;
	public		$plentyIdHash;
	public		$resultData;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}