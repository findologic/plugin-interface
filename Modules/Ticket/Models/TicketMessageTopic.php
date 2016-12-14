<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket message topic model.
 */
abstract class TicketMessageTopic 
{
	public		$id;
	public		$position;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}