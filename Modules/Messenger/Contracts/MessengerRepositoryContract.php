<?php
namespace Plenty\Modules\Messenger\Contracts;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Messenger\Models\Attachment;
use Plenty\Modules\Messenger\Models\Message;
use Plenty\Repositories\Contracts\FilterableContract;

/**
 * The contract defines methods to add and show/list messages.
 */
interface MessengerRepositoryContract 
{

	const DEFAULT_MESSAGES_AMOUNT = 50;

	const DEFAULT_PAGE_OF_MESSAGES = 1;

	const DEFAULT_ITEMS_PER_PAGE_OF_MESSAGES = 50;

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
	);

	/**
	 * List messages.
	 */
	public function list(
		string $uuid = null, 
		bool $successors = true, 
		int $amount = self::DEFAULT_MESSAGES_AMOUNT
	):array;

	/**
	 * Get messages.
	 */
	public function getMessages(
		int $page = self::DEFAULT_PAGE_OF_MESSAGES, 
		int $itemsPerPage = self::DEFAULT_ITEMS_PER_PAGE_OF_MESSAGES
	):array;

	/**
	 * Update ReadBy Array of message
	 */
	public function updateReadBy(
		int $readBy, 
		string $uuid
	);

	/**
	 * Update the visibility of the message.
	 */
	public function updateVisibility(
		array $data, 
		string $uuid
	);

	/**
	 * Set the doneAt date in the message.
	 */
	public function setDone(
		string $doneAt = null, 
		string $uuid
	);

	/**
	 * Deletes a message stream by uuid.
	 */
	public function delete(
		string $uuid
	):int;

	/**
	 * Get a message attachment.
	 */
	public function getAttachment(
		string $uuid, 
		string $filename
	):Attachment;

	/**
	 * Update meta data from message
	 */
	public function updateMetaData(
		string $uuid, 
		array $metaData
	):Message;

	/**
	 * Returns total message entries
	 */
	public function getTotalEntries(
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