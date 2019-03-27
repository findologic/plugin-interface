<?php
namespace Plenty\Modules\Wizard\Contracts;

use Plenty\Modules\Wizard\Models\WizardData;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface provides methods to create, get, list, update and delete wizard data
 */
interface WizardDataRepositoryContract 
{

	/**
	 * Creates a new WizardData.
	 */
	public function create(
		string $wizardKey, 
		array $steps = []
	):WizardData;

	/**
	 * Creates a new WizardData option
	 */
	public function createDataOption(
		string $uuid, 
		array $data = [], 
		string $optionId = "default"
	):WizardData;

	/**
	 * Get a single WizardData by its ID
	 */
	public function get(
		string $uuid
	):WizardData;

	/**
	 * Get a single WizardData for an option ID
	 */
	public function getByOptionId(
		string $uuid, 
		string $optionId = "default"
	):WizardData;

	public function findByWizardKey(
		string $wizardKey
	):WizardData;

	/**
	 * List all WizardData for current plenty ID.
	 */
	public function list(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = []
	):array;

	/**
	 * Update data for a WizardData
	 */
	public function update(
		string $uuid, 
		array $properties
	):WizardData;

	/**
	 * Update data for a WizardData option
	 */
	public function updateDataOption(
		string $uuid, 
		string $optionId, 
		array $data, 
		string $stepKey, 
		bool $skipValidation = false
	):WizardData;

	/**
	 * Delete a single WizardData by its ID
	 */
	public function delete(
		string $uuid
	);

	/**
	 * Delete a single WizardData by its ID
	 */
	public function deleteDataOption(
		string $uuid, 
		string $optionId
	);

	/**
	 * Finalize wizard
	 */
	public function finalize(
		string $uuid, 
		string $optionId = "default"
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