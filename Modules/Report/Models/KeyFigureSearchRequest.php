<?php
namespace Plenty\Modules\Report\Models;


/**
 * The model holds filter information for a search query for key figures.
 */
abstract class KeyFigureSearchRequest 
{
	public		$id;
	public		$configId;
	public		$timeInterval;
	public		$dataGroup;
	public		$scaleBasisTimeBetween;
	public		$itemsPerPage;
	public		$sortOrder;
	public		$after;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}