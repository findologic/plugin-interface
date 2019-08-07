<?php
namespace Plenty\Modules\Messenger\Events;

use Plenty\Modules\Messenger\Models\Message;

/**
 * The event is triggered after a new message was created
 */
abstract class MessageCreated 
{

	/**
	 * If <tt>TRUE</tt>, the message is the first one, otherwise an answer message.
	 */
	abstract public function isFirstMessage(
	):bool;

	/**
	 * Get the message.
	 */
	abstract public function getMessage(
	):Message;

}