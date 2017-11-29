<?php
namespace Plenty\Modules\Account\Address\Contracts;

use Plenty\Modules\Account\Address\Models\AddressOptionType;
use Plenty\Modules\Account\Address\Models\AddressRelationType;

/**
 * The AddressParamConfigurationRepositoryContract is the interface for the address relation types repository.
 */
interface AddressParamConfigurationRepositoryContract 
{

	/**
	 * Create a new address relation type
	 */
	public function createAddressRelationType(
		array $data
	):AddressRelationType;

	/**
	 * Update an existing address relation type
	 */
	public function updateAddressRelationType(
		array $data, 
		int $addressRelationTypeId
	):AddressRelationType;

	/**
	 * Delete an address relation type by given id
	 */
	public function deleteAddressRelationType(
		int $addressRelationTypeId
	):bool;

	/**
	 * Find an existing address relation type by given id
	 */
	public function findAddressRelationTypeById(
		int $addressRelationTypeId
	):AddressRelationType;

	/**
	 * Get list of address relation type
	 */
	public function allAddressRelationTypes(
		array $columns = [], 
		int $perPage = 50
	);

	/**
	 * Create a new address option type
	 */
	public function createAddressOptionType(
		array $data
	):AddressOptionType;

	/**
	 * Update an existing address option type
	 */
	public function updateAddressOptionType(
		array $data, 
		int $addressOptionTypeId
	):AddressOptionType;

	/**
	 * Delete an address option type by given id
	 */
	public function deleteAddressOptionType(
		int $addressOptionTypeId
	):bool;

	/**
	 * Find an existing address option type by given id
	 */
	public function findAddressOptionTypeById(
		int $addressOptionTypeId
	):AddressOptionType;

	/**
	 * Get list of address option type
	 */
	public function allAddressOptionType(
		array $columns = [], 
		int $perPage = 50
	);

}