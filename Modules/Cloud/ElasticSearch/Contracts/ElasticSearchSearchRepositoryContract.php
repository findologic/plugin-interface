<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\SearchInterface;

/**
 * foo
 */
interface ElasticSearchSearchRepositoryContract 
{

	public function setIndex(
		IndexInterface $index
	):\Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchSearchRepositoryContract;

	public function addSearch(
		SearchInterface $search
	):\Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchSearchRepositoryContract;

	public function execute(
	):array;

}