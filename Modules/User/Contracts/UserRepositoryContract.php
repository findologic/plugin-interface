<?php
namespace Plenty\Modules\User\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;
use Plenty\Modules\User\Models\User;

/**
 * UserRepositoryContract
 */
interface UserRepositoryContract 
{

	public function getAll(
	):Collection;

	public function getCurrentUser(
	):User;

	public function getUserById(
		int $userId
	):User;

	/**
	 * Get all users with a pin
	 */
	public function getAllPinUsers(
		string $clientName = null, 
		string $clientSecret = null
	):Collection;

	public function findByName(
		string $name
	):Collection;

	/**
	 * Sets the selected PluginSet for a given user's backend
	 */
	public function setBackendPluginSet(
		int $userId, 
		int $setId
	):bool;

	/**
	 * Gets the selected PluginSet for a given user's backend
	 */
	public function getBackendPluginSet(
		int $userId
	):PluginSet;

}