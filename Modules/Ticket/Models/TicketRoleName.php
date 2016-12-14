<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket role name model.
 */
abstract class TicketRoleName 
{
	public		$id;
	public		$roleId;
	public		$lang;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}