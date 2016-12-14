<?php
namespace Plenty\Modules\Item\ItemImage\Models;


/**
 * The ItemImage Model
 */
abstract class ItemImage 
{
	public		$id;
	public		$itemId;
	public		$fileType;
	public		$path;
	public		$position;
	public		$createdAt;
	public		$updatedAt;
	public		$md5Checksum;
	public		$size;
	public		$width;
	public		$height;
	public		$url;
	public		$urlMiddle;
	public		$urlPreview;
	public		$urlSecondPreview;
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