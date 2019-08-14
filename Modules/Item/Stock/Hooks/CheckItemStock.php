<?php
namespace Plenty\Modules\Item\Stock\Hooks;

use Plenty\Modules\Basket\Contracts\BasketItemRepositoryContract;
use Plenty\Modules\Basket\Events\BasketItem\BasketItemEvent;
use Plenty\Modules\Basket\Exceptions\BasketItemCheckException;
use Plenty\Modules\Basket\Models\BasketItem;
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
use Plenty\Modules\Item\DataLayer\Models\Record;
use Plenty\Modules\Item\Stock\Contracts\BasketReservationContract;
use Plenty\Modules\Item\Stock\Events\BasketItemWarnOversell;
use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\System\Module\Contracts\PlentyModuleRepositoryContract;

/**
 * CheckItemStock
 */
abstract class CheckItemStock 
{

	abstract public function handle(
		BasketItemEvent $basketItemEvent
	);

}