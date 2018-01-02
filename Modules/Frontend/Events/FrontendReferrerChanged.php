<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the referrer id  is changed in the online store.
 */
abstract class FrontendReferrerChanged 
{

	abstract public function getReferrerId(
	);

	abstract public function setReferrerId(
		 $referrerId
	):FrontendReferrerChanged;

}