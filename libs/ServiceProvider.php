<?php
namespace Illuminate\Support;

use Closure;

abstract class ServiceProvider 
{

	abstract public function register(
	):void;

}