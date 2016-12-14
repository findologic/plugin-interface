<?php
namespace Plenty\Modules\Payment\Models;

use Plenty\Modules\Payment\Method\Models\PaymentMethod;
use Plenty\Modules\Payment\History\Models\PaymentHistory;

/**
 * The payment model
 */
abstract class Payment 
{
	public		$id;
	public		$amount;
	public		$exchangeRatio;
	public		$deleted;
	public		$unaccountable;
	public		$currency;
	public		$type;
	public		$hash;
	public		$origin;
	public		$receivedAt;
	public		$importedAt;
	public		$status;
	public		$transactionType;
	public		$mopId;
	public		$parentId;
	public		$paymentMethod;
	public		$history;
	public		$property;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}