<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket status model.
 */
abstract class TicketStatus 
{
	public		$id;
	public		$typeId;
	public		$position;
	public		$statusGroupId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}