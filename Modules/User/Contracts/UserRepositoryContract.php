<?php
namespace Plenty\Modules\User\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\User\Models\User;

/**
 * UserRepositoryContract
 */
interface UserRepositoryContract 
{

	public function getAll(
	):Collection;

	public function getUserById(
		int $userId
	):User;

}