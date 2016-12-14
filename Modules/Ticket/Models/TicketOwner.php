<?php
namespace Plenty\Modules\Ticket\Models;

use Plenty\Modules\Authentication\Models\User;

/**
 * The ticket owner model.
 */
abstract class TicketOwner 
{
	public		$ticketId;
	public		$userId;
	public		$roleId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}