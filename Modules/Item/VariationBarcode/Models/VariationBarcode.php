<?php
namespace Plenty\Modules\Item\VariationBarcode\Models;


/**
 * Variation Barcode
 */
abstract class VariationBarcode 
{
	public		$code;
	public		$barcodeId;
	public		$variationId;
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}