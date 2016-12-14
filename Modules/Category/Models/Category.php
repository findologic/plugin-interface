<?php
namespace Plenty\Modules\Category\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * Category
 */
abstract class Category 
{
	public		$id;
	public		$parentCategoryId;
	public		$level;
	public		$type;
	public		$linklist;
	public		$right;
	public		$sitemap;
	public		$clients;
	public		$details;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}