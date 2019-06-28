<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * To be written
 */
interface CatalogTemplateProviderContract 
{

	public function getMappings(
	):array;

	public function getFilter(
	):array;

	public function getPreMutators(
	):array;

	public function getPostMutators(
	):array;

	public function getSkuCallback(
	):callable;

	public function getSettings(
	):array;

	public function getMetaInfo(
	):array;

}