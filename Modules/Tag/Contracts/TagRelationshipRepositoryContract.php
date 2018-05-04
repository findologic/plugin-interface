<?php
namespace Plenty\Modules\Tag\Contracts;

use Illuminate\Support\Collection;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Tag\Models\TagRelationship;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * Repository for TagRelationship
 */
interface TagRelationshipRepositoryContract 
{

	public function update(
		array $data, 
		int $tagId, 
		string $availabilityType, 
		int $relationshipValue
	):TagRelationship;

	public function create(
		array $data
	):TagRelationship;

	public function deleteRelation(
		int $relationshipValue, 
		int $tagId
	);

	public function deleteOneRelation(
		int $relationshipValue, 
		string $relationshipType, 
		int $tagId
	);

	public function findByValueId(
		int $valueId
	):array;

	public function findByTagId(
		int $tagId
	):array;

	/**
	 * Gets a specific tag relationship or returns null
	 */
	public function findRelationship(
		int $tagId, 
		int $relationshipValue, 
		string $relationshipType
	):TagRelationship;

	/**
	 * Deletes tag links by reference value and relationship type
	 */
	public function delete(
		int $relationshipValue, 
		string $relationshipType
	):DeleteResponse;

	/**
	 * Returns all tagRelationships
	 */
	public function listRelationships(
		array $with = []
	):Collection;

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