<?php
namespace Plenty\Modules\Cloud\Storage\Contracts;

use Plenty\Modules\Cloud\Storage\Exceptions\StorageException;

/**
 * Store files on amazon S3
 */
interface StorageRepositoryContract 
{

	/**
	 * Upload an object by streaming the contents of a file $pathToFile should be absolute path to a file on disk
	 */
	public function uploadFile(
		string $bucket, 
		string $key, 
		string $pathToFile, 
		boolean $publicVisible = false, 
		array $metaData = []
	):boolean;

	/**
	 * Create an object with content in $body
	 */
	public function uploadObject(
		string $bucket, 
		string $key, 
		string $body, 
		boolean $publicVisible = false, 
		array $metaData = []
	):boolean;

	/**
	 * Get an object from FS
	 */
	public function getObject(
		string $bucket, 
		string $key, 
		boolean $publicVisible = false
	):array;

	/**
	 * Get local file resource of an object. Use this if it is really necessary! Using getObject is the normal and effective way.
	 */
	public function getObjectAsTemporaryFileResource(
		string $bucket, 
		string $key, 
		boolean $publicVisible = false
	):string;

	/**
	 * Checks if object exists
	 */
	public function doesObjectExist(
		string $bucket, 
		string $key, 
		bool $publicVisible = false
	):bool;

	/**
	 * Executes the DeleteObjects operation. You may specify up to 1000 keys.
	 */
	public function deleteObjects(
		string $bucket, 
		array $keyList, 
		bool $publicVisible = false
	):boolean;

}