<?php
namespace Plenty\Modules\Report\Models;


/**
 * The key figure config search result model represents search result of key figure config search.
 */
abstract class KeyFigureConfigSearchResult 
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