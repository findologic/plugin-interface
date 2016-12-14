<?php
namespace Plenty\Modules\Item\Item\Contracts;

use Illuminate\Http\Request;
use Plenty\Modules\Item\Item\Models\Item;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * Repository for item basket
 */
interface ItemRepositoryContract 
{

	public function add(
		array $data
	);

	public function show(
		int $itemId, 
		array $columns = [], 
		string $lang = "de"
	);

	public function search(
		 $columns = [], 
		 $lang = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	);

}