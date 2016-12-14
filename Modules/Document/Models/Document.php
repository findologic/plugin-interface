<?php
namespace Plenty\Modules\Document\Models;

use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Category\Models\Category;
use Illuminate\Support\Collection;

/**
 * Document
 */
abstract class Document 
{
	public		$id;
	public		$type;
	public		$number;
	public		$numberWithPrefix;
	public		$directoryId;
	public		$path;
	public		$userId;
	public		$source;
	public		$displayDate;
	public		$createdAt;
	public		$updatedAt;
	public		$directory;
	public		$contacts;
	public		$orders;
	public		$webstores;
	public		$categories;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}