<?php
namespace Plenty\Modules\Messenger\Contracts;

use Illuminate\Auth\Access\AuthorizationException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Messenger\Models\Message;
use Plenty\Repositories\Contracts\FilterableContract;

/**
 * The contract defines methods to add and show/list messages.
 */
interface MessengerRepositoryContract 
{

	const DEFAULT_MESSAGES_AMOUNT = 50;

	/**
	 * Create a new Message.
	 */
	public function add(
		array $data
	):Message;

	/**
	 * Show a message with all its successors.
	 */
	public function show(
		string $uuid
	):array;

	/**
	 * List messages.
	 */
	public function list(
		string $uuid = null, 
		bool $successors = true, 
		int $amount = self::DEFAULT_MESSAGES_AMOUNT
	):array;

	/**
	 * Update ReadBy Array of message
	 */
	public function updateReadBy(
		int $readBy, 
		string $uuid
	):array;

	/**
	 * Deletes a message stream by uuid.
	 */
	public function delete(
		string $uuid
	):int;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}