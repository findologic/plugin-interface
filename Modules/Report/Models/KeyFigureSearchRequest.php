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
	public		$resultUnit;
	public		$target;
	public		$groupByDataGroup;
	public		$aggregateFunction;
	public		$itemsPerPage;
	public		$page;
	public		$scaleBasisSortOrder;
	public		$primaryResultSortOrder;
	public		$searchId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}