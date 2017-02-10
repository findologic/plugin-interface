<?php
namespace Plenty\Modules\Order\Date\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Exceptions\ModelAlreadyExistsException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Date\Models\OrderItemDate;

/**
 * The OrderItemDateRepositoryContract contains the functionality to find, create, update and delete OrderItemDate instances.
 */
interface OrderItemDateRepositoryContract 
{

	/**
	 * Find an order item date by its ID.
	 */
	public function find(
		int $id
	):OrderItemDate;

	/**
	 * Create an order item date
	 */
	public function create(
		array $data = []
	):OrderItemDate;

	/**
	 * Update an order date
	 */
	public function update(
		array $data, 
		int $id
	):OrderItemDate;

	/**
	 * Create or update an order item date
	 */
	public function save(
		array $data = []
	):OrderItemDate;

	/**
	 * Delete a date
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Get an order item date by an order item ID and an order date type ID.
	 */
	public function findByOrderItemIdAndTypeId(
		int $orderItemId, 
		int $typeId
	):OrderItemDate;

	/**
	 * Create an order item date by an order item ID and an order date type ID.
	 */
	public function createByOrderItemIdAndTypeId(
		array $data, 
		int $orderItemId, 
		int $typeId
	):OrderItemDate;

	/**
	 * Update an order item date by an order item ID and an order date type ID.
	 */
	public function updateByOrderItemIdAndTypeId(
		array $data, 
		int $orderItemId, 
		int $typeId
	):OrderItemDate;

	/**
	 * Delete an order item date by an order item ID and an order date type ID.
	 */
	public function deleteByOrderItemIdAndTypeId(
		int $orderItemId, 
		int $typeId
	):bool;

	/**
	 * List order item dates of an order item.
	 */
	public function findByOrderItemId(
		int $orderItemId
	):array;

}