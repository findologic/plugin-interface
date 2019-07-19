<?php
namespace Plenty\Modules\Report\Models;


/**
 * The key figure filter model is the base class of all key figure filter classes. Each KeyFigure class needs a filter class, which defines the allowed fields to be filtered.
 */
abstract class KeyFigureFilter 
{
	public		$filters;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}