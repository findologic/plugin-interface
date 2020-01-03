<?php
namespace Plenty\Modules\Report\Models;


/**
 * The model holds filter information for a search query for key figures.
 */
abstract class KeyFigureSearchRequest 
{
	public		$configId;
	public		$interval;
	public		$dataGroup;
	public		$scaleBasis;
	public		$itemsPerPage;
	public		$page;
	public		$sortOrder;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}