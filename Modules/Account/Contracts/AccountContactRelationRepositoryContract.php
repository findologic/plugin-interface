<?php
namespace Plenty\Modules\Account\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Account\Models\AccountContactRelation;

/**
 * The AccountContactRelationRepositoryContract is the interface for the account contact relation repository. This interface allows to find and delete an account contact relation.
 */
interface AccountContactRelationRepositoryContract 
{

	/**
	 * Gets an account contact releation. The ID of the account contact relation must be specified.
	 */
	public function findAccountContactRelationById(
		int $accountContactRelation
	):AccountContactRelation;

	/**
	 * Deletes an account contact relation. The ID of the account contact relation must be specified.
	 */
	public function deleteAccountContactRelation(
		int $accountContactRelationId
	):bool;

}