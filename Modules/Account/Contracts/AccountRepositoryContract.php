<?php
namespace Plenty\Modules\Account\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Account\Models\Account;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The AccountRepositoryContract is the interface for the account repository. This interface allows to list, get, create, update and delete accounts. An account contains company-related data. It is also possible to list all contacts of an account.
 */
interface AccountRepositoryContract 
{

	/**
	 * Creates a new account and returns it.
	 */
	public function createAccount(
		array $data
	):Account;

	/**
	 * Updates an existing account and returns it. The ID of the account must be specified.
	 */
	public function updateAccount(
		array $data, 
		int $accountId
	):Account;

	/**
	 * Deletes an account. The ID of the account must be specified. Returns `true` if deletion was successful. Returns `false` if deletion was not successful.
	 */
	public function deleteAccount(
		int $accountId
	):bool;

	/**
	 * Gets an account. The ID of the account must be specified.
	 */
	public function findAccountById(
		int $accountId
	):Account;

	/**
	 * Returns a collection of all accounts.
	 */
	public function allAccounts(
		array $columns = [], 
		int $perPage = 50
	):Collection;

	/**
	 * Returns a collection of all accounts.
	 */
	public function allAccountsPaginated(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * Returns a collection of contacts that belong to the account.
	 */
	public function getContactsOfAccount(
		int $accountId
	):Collection;

	/**
	 * Creates a new or updates an existing account.
	 */
	public function saveAccount(
		array $data = []
	);

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

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

}