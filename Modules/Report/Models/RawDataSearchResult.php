<?php
namespace Plenty\Modules\Report\Models;


/**
 * The report raw data search result model
 */
abstract class RawDataSearchResult 
{
	public		$after;
	public		$searchResult;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}