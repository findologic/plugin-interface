<?php
namespace Plenty\Modules\Market\Ebay\PartsFitment\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The fitment item property model. This bleongs to an FitmentItem model.
 */
abstract class FitmentItemProperty 
{
	public		$id;
	public		$fitmentItemId;
	public		$name;
	public		$value;
	public		$fitmentItem;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}