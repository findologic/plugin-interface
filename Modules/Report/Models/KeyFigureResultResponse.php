<?php
namespace Plenty\Modules\Report\Models;


/**
 * The model represent a key figure result in condensed form to the presentation.
 */
abstract class KeyFigureResultResponse 
{
	public		$scaleBasis;
	public		$dataGroup;
	public		$primaryResult;
	public		$furtherResult;
	public		$calculatedAt;
	public		$realScaleBasis;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}