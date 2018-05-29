<?php
namespace Plenty\Modules\CustomerContract\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\CustomerContract\Models\CustomerContract;

/**
 * This interface provides methods to list contracts
 */
interface CustomerContractRepositoryContract 
{

	/**
	 * List all contracts
	 */
	public function list(
	):Collection;

	/**
	 * Returns a single contract
	 */
	public function get(
		string $contractId
	):CustomerContract;

	/**
	 * Add a contract
	 */
	public function create(
		array $data
	):CustomerContract;

	/**
	 * Download contract document
	 */
	public function document(
		string $contractId
	);

}