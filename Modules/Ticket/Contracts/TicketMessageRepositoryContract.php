<?php
namespace Plenty\Modules\Ticket\Contracts;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Ticket\Models\TicketMessage;

/**
 * Repository contract for TicketMessage functionality
 */
interface TicketMessageRepositoryContract 
{

	/**
	 * Get the <tt>TicketMessage</tt> for the given id.
	 */
	public function get(
		int $ticketMessageId
	):TicketMessage;

	/**
	 * List all <tt>TicketMessage</tt>'s for a Ticket.
	 */
	public function list(
		int $ticketId
	);

	/**
	 * List all <tt>TicketMessage</tt>'s for a Ticket.
	 */
	public function listInternal(
		int $ticketId
	);

	/**
	 * List all <tt>TicketMessage</tt>'s for a Ticket.
	 */
	public function listPublic(
		int $ticketId
	);

}