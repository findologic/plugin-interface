<?php
namespace Plenty\Modules\Item\Search\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchSearchRepositoryContract;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\SearchInterface;

/**
 * kommt noch
 */
interface VariationElasticSearchSearchRepositoryContract 
{

	public function setIndex(
		IndexInterface $index
	):ElasticSearchSearchRepositoryContract;

	public function addSearch(
		SearchInterface $search
	):ElasticSearchSearchRepositoryContract;

	public function execute(
	):array;

}