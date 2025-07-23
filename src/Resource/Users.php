<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Users\DeleteSessionsByUserId;
use LightSpeed\XSeries\Requests\Users\DeleteUserById;
use LightSpeed\XSeries\Requests\Users\GetSalesTotalsForUserById;
use LightSpeed\XSeries\Requests\Users\GetUser;
use LightSpeed\XSeries\Requests\Users\GetUserById;
use LightSpeed\XSeries\Requests\Users\GetUsersById;
use LightSpeed\XSeries\Requests\Users\ListUsers;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Users extends BaseResource
{
	public function getUser(): Response
	{
		return $this->connector->send(new GetUser());
	}


	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listUsers(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListUsers($after, $before, $pageSize));
	}


	public function getUsersById(): Response
	{
		return $this->connector->send(new GetUsersById());
	}


	/**
	 * @param string $userId A valid user id
	 */
	public function getUserById(string $userId): Response
	{
		return $this->connector->send(new GetUserById($userId));
	}


	/**
	 * @param string $userId A valid user id that is not the current user nor a primary admin
	 */
	public function deleteUserById(string $userId): Response
	{
		return $this->connector->send(new DeleteUserById($userId));
	}


	/**
	 * @param string $userId A valid user id
	 */
	public function deleteSessionsByUserId(string $userId): Response
	{
		return $this->connector->send(new DeleteSessionsByUserId($userId));
	}


	/**
	 * @param string $userId A valid user id
	 */
	public function getSalesTotalsForUserById(string $userId): Response
	{
		return $this->connector->send(new GetSalesTotalsForUserById($userId));
	}
}
