<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Users\DeleteSingleUser;
use LightSpeed\XSeries\Requests\Users\DeleteUserSessions;
use LightSpeed\XSeries\Requests\Users\GetSingleUser;
use LightSpeed\XSeries\Requests\Users\ListUsers;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Users extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listUsers(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListUsers($after, $before, $pageSize, $accept));
	}


	/**
	 * @param string $userId
	 * @param string $accept
	 */
	public function getSingleUser(string $userId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleUser($userId, $accept));
	}


	/**
	 * @param string $userId
	 */
	public function deleteUserSessions(string $userId): Response
	{
		return $this->connector->send(new DeleteUserSessions($userId));
	}


	/**
	 * @param string $userId
	 */
	public function deleteSingleUser(string $userId): Response
	{
		return $this->connector->send(new DeleteSingleUser($userId));
	}
}
