<?php
namespace Plenty\Modules\Webshop\Seo\Contracts;

use Plenty\Modules\Webshop\Seo\Models\SitemapConfiguration;

/**
 * Repository for sitemap configuration
 */
interface SitemapConfigurationRepositoryContract 
{

	public function findByWebstoreId(
		int $webstoreId
	):SitemapConfiguration;

	public function updateByWebstoreId(
		int $webstoreId, 
		array $data = []
	):SitemapConfiguration;

}