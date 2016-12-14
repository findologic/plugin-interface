<?php
namespace Plenty\Modules\Account\Contact\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * contact type model
 */
abstract class ContactType 
{
	public		$id;
	public		$position;
	public		$nonErasable;
	public		$names;
	public		$contacts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}