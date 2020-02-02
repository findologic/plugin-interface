<?php
namespace Plenty\Modules\Report\Models;


/**
 * The key figure filter model is the base class of all key figure filter classes. Each key figure class needs a filter class, which defines the allowed fields to be filtered.
 */
abstract class KeyFigureFilter 
{
	public		$filters;
	public		$filterString;
	public		$calculations;
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