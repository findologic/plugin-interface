<?php
namespace Plenty\Modules\Basket\Exceptions;

use Plenty\Plugin\Error\HTTPException;

/**
 * Created by ptopczewski, 12.05.16 09:03
Class BasketItemCheckException
 */
abstract class BasketItemCheckException extends HTTPException 

{

	/**
	 * variation not found
	 */
	const VARIATION_NOT_FOUND = 1;

	/**
	 * not enough stock for item
	 */
	const NOT_ENOUGH_STOCK_FOR_ITEM = 2;

	/**
	 * not enough stock for variation
	 */
	const NOT_ENOUGH_STOCK_FOR_VARIATION = 3;

	/**
	 * BasketItemCheckException constructor.
	 */
	abstract public function __construct(
		int $code = 404, 
		string $message = "", 
		\Exception $previous = null, 
		int $itemId = 0, 
		int $variationId = 0, 
		float $stockNet = 0.0
	);

	abstract public function getItemId(
	):int;

	abstract public function getVariationId(
	):int;

	abstract public function getStockNet(
	):float;

}