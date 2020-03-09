<?php
namespace Plenty\Modules\Report\KeyFigure\Models;


/**
 * The key figure config model represents the configuration of a key figure.
 */
abstract class KeyFigureConfig 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$plentyIdHash;
	public		$keyFigure;
	public		$keyFigureName;
	public		$filter;
	public		$target;
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