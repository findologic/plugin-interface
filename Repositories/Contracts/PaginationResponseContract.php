<?php
namespace Plenty\Repositories\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

/**
 * Contract for PaginationResponse
 */
interface PaginationResponseContract 
{

	public function getTotal(
	);

	public function setTotal(
		 $total
	);

	public function getPage(
	);

	public function setPage(
		 $page
	);

	public function getEntriesPerPage(
	);

	public function setEntriesPerPage(
		 $epp
	);

	public function getResult(
	);

	public function setResult(
		 $entries
	);

	public function toJson(
		 $options = 0
	);

	public function toArray(
	);

}