<?php
namespace Plenty\Modules\Payment\Contracts;

use Plenty\Modules\Account\Contact\Models\Contact;
use League\Flysystem\Exception;
use Plenty\Modules\Payment\Models\Payment;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * The PaymentContactRelationRepositoryContract is the interface for the payment contact relation repository. Create and delete relations between payments and contact.
 */
interface PaymentContactRelationRepositoryContract 
{

	/**
	 * Creates a payment contact relation.
	 */
	public function createContactRelation(
		Payment $payment, 
		Contact $contact
	):bool;

	/**
	 * Deletes a payment contact relation.
	 */
	public function deleteContactRelation(
		Payment $payment
	):bool;

}