<?php
namespace Plenty\Modules\Report\Models;


/**
 * The key figure result search result model combine key figure information with key figure search result.
 */
abstract class KeyFigureResultSearchResult 
{
	public		$keyFigureResults;
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