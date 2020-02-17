<?php
namespace Plenty\Modules\Report\KeyFigure\Models;


/**
 * The key figure filter holds configured filters for a key figure calculation.
 */
abstract class KeyFigureFilter 
{
	public		$filterQuery;
	public		$calculation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}