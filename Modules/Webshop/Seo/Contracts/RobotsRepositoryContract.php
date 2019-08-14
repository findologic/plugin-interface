<?php
namespace Plenty\Modules\Webshop\Seo\Contracts;

use Plenty\Modules\Webshop\Seo\Models\Robots;

/**
 * Repository for robots.txt
 */
interface RobotsRepositoryContract 
{

	public function findByWebstoreId(
		int $webstoreId
	):Robots;

	public function updateByWebstoreId(
		int $webstoreId, 
		string $data
	):Robots;

}