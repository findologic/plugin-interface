<?php
namespace Illuminate\Support;

use ArrayAccess;
use ArrayIterator;
use CachingIterator;
use Countable;
use Exception;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Debug\Dumper;
use Illuminate\Support\Traits\Macroable;
use IteratorAggregate;
use JsonSerializable;
use Traversable;
use stdClass;

abstract class Collection 
{

	/**
	 * Filter items by the given key value pair.
	 */
	abstract public function where(
		string $key, 
		 $operator, 
		 $value = null
	):Collection;

	/**
	 * Get the first item from the collection.
	 */
	abstract public function first(
		callable $callback = null, 
		 $default = null
	);

}