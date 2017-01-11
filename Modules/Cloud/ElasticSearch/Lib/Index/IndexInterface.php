<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Index;


/**
 * to be written
 */
interface IndexInterface 
{

	public function getType(
	):string;

	public function getPlentyId(
	):int;

	public function getVersion(
	):int;

	public function getIdentifier(
	):string;

	public function isAvailable(
	):bool;

	public function isReady(
	):bool;

	public function getSettingsClassName(
	):string;

	public function getMappingClassName(
	):string;

}