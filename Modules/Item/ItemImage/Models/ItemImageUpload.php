<?php
namespace Plenty\Modules\Item\ItemImage\Models;


/**
 * ItemImage
 */
abstract class ItemImageUpload 
{
	public		$id;
	public		$itemId;
	public		$fileType;
	public		$path;
	public		$position;
	public		$created;
	public		$updated;
	public		$uploadImageData;
	public		$uploadUrl;
	public		$uploadFileName;
	public		$names;
	public		$availabilities;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}