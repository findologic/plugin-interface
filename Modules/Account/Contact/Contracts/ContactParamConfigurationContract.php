<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Plenty\Modules\Account\Contact\Models\ContactDepartment;
use Plenty\Modules\Account\Contact\Models\ContactOptionSubType;
use Plenty\Modules\Account\Contact\Models\ContactOptionType;
use Plenty\Modules\Account\Contact\Models\ContactPosition;

/**
 * The ContactParamConfigurationContract is the interface for the contact param configuration repository. This interface allows to create, update, delete, list and get contact positions, contact departments, contact option types and and contact option sub types.
 */
interface ContactParamConfigurationContract 
{

	/**
	 * Create a new contact position
	 */
	public function createContactPosition(
		array $data
	):ContactPosition;

	/**
	 * Update an existing contact position
	 */
	public function updateContactPosition(
		array $data, 
		int $contactPositionId
	):ContactPosition;

	/**
	 * Delete an contact position by given id
	 */
	public function deleteContactPosition(
		int $contactPositionId
	):bool;

	/**
	 * Find an existing contact position by given id
	 */
	public function findContactPositionById(
		int $contactPositionId
	):ContactPosition;

	/**
	 * Get list of contact position
	 */
	public function allContactPositions(
		array $columns = [], 
		int $perPage = 50
	);

	/**
	 * Create a new contact department
	 */
	public function createContactDepartment(
		array $data
	):ContactDepartment;

	/**
	 * Update an existing contact department
	 */
	public function updateContactDepartment(
		array $data, 
		int $contactDepartmentId
	):ContactDepartment;

	/**
	 * Delete an contact department by given id
	 */
	public function deleteContactDepartment(
		int $contactDepartmentId
	):bool;

	/**
	 * Find an existing contact department by given id
	 */
	public function findContactDepartmentById(
		int $contactDepartmentId
	):ContactDepartment;

	/**
	 * Get list of contact department
	 */
	public function allContactDepartments(
		array $columns = [], 
		int $perPage = 50
	);

	/**
	 * Create a new contact option type
	 */
	public function createContactOptionType(
		array $data
	):ContactOptionType;

	/**
	 * Update an existing contact option type
	 */
	public function updateContactOptionType(
		array $data, 
		int $contactOptionTypeId
	):ContactOptionType;

	/**
	 * Delete an contact option type by given id
	 */
	public function deleteContactOptionType(
		int $contactOptionTypeId
	):bool;

	/**
	 * Find an existing contact option type by given id
	 */
	public function findContactOptionTypeById(
		int $contactOptionTypeId
	):ContactOptionType;

	/**
	 * Get list of contact option type
	 */
	public function allContactOptionType(
		array $columns = [], 
		int $perPage = 50, 
		array $with = []
	);

	/**
	 * Create a new contact option sub type
	 */
	public function createContactOptionSubType(
		array $data
	):ContactOptionSubType;

	/**
	 * Update an existing contact options sub type
	 */
	public function updateContactOptionSubType(
		array $data, 
		int $contactOptionSubTypeId
	):ContactOptionSubType;

	/**
	 * Delete an contact options sub type by given id
	 */
	public function deleteContactOptionSubType(
		int $contactOptionSubTypeId
	):bool;

	/**
	 * Find an existing contact options sub type by given id
	 */
	public function findContactOptionSubTypeById(
		int $contactOptionSubTypeId
	):ContactOptionSubType;

	/**
	 * Get list of contact option sub type
	 */
	public function allContactOptionSubType(
		array $columns = [], 
		int $perPage = 50
	);

}