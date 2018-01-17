<?php
namespace Plenty\Modules\Frontend\Services;

use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Authentication\Models\User;
use Plenty\Modules\Basket\Contracts\BasketRepositoryContract;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Cloud\Storage\Contracts\StorageProviderRepositoryContract;
use Plenty\Modules\Cloud\Storage\Exceptions\StorageException;
use Plenty\Modules\Cloud\Storage\Factories\StorageFactory;
use Plenty\Modules\Frontend\Session\Storage\Models\Order as SessionOrder;
use Plenty\Modules\Frontend\Validators\OrderPropertyFileValidator;
use Plenty\Modules\Order\Contracts\InternalOrderRepositoryContract;
use Plenty\Modules\Order\Models\Order;

/**
 * Frontend-service for customer information
 */
abstract class OrderPropertyFileService 
{

	const STORAGE = 'orderPropertyFiles';

	const TMP_PREFIX = 'temp';

	const SALT = '%oPF__';

	const ORDER_ITEM_PROPERTY_REGEX = '^[0-9a-f]{8}\/[0-9a-f]{8}\/';

	abstract public function uploadFile(
		array $fileData
	):string;

	abstract public function getFileURL(
		string $key
	):string;

	abstract public function copyBasketFileToOrder(
		string $filename
	):string;

	abstract public function deleteFile(
		string $filename
	);

}