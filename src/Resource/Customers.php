<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Customers\CreateNewCustomer;
use LightSpeed\XSeries\Requests\Customers\DeleteCustomer;
use LightSpeed\XSeries\Requests\Customers\GetSingleCustomer;
use LightSpeed\XSeries\Requests\Customers\ListCustomers;
use LightSpeed\XSeries\Requests\Customers\UpdateCustomer;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Customers extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 * @param string $accept
	 */
	public function listCustomers(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $deleted = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListCustomers($after, $before, $pageSize, $deleted, $accept));
	}


	/**
	 * @param mixed $customerCode
	 * @param mixed $name
	 * @param mixed $firstName
	 * @param mixed $lastName
	 * @param mixed $email
	 * @param mixed $yearToDate
	 * @param mixed $balance
	 * @param mixed $loyaltyBalance
	 * @param mixed $note
	 * @param mixed $gender
	 * @param mixed $dateOfBirth
	 * @param mixed $companyName
	 * @param mixed $doNotEmail
	 * @param mixed $contactSource
	 * @param mixed $phone
	 * @param mixed $mobile
	 * @param mixed $fax
	 * @param mixed $twitter
	 * @param mixed $website
	 * @param mixed $physicalAddress1
	 * @param mixed $physicalAddress2
	 * @param mixed $physicalSuburb
	 * @param mixed $physicalCity
	 * @param mixed $physicalPostcode
	 * @param mixed $physicalState
	 * @param mixed $physicalCountryId
	 * @param mixed $postalAddress1
	 * @param mixed $postalAddress2
	 * @param mixed $postalSuburb
	 * @param mixed $postalCity
	 * @param mixed $postalPostcode
	 * @param mixed $postalState
	 * @param mixed $postalCountryId
	 * @param mixed $customerGroupId
	 * @param mixed $enableLoyalty
	 * @param mixed $customField1
	 * @param mixed $customField2
	 * @param mixed $customField3
	 * @param mixed $customField4
	 * @param string $accept
	 */
	public function createNewCustomer(
		mixed $customerCode = null,
		mixed $name = null,
		mixed $firstName = null,
		mixed $lastName = null,
		mixed $email = null,
		mixed $yearToDate = null,
		mixed $balance = null,
		mixed $loyaltyBalance = null,
		mixed $note = null,
		mixed $gender = null,
		mixed $dateOfBirth = null,
		mixed $companyName = null,
		mixed $doNotEmail = null,
		mixed $contactSource = null,
		mixed $phone = null,
		mixed $mobile = null,
		mixed $fax = null,
		mixed $twitter = null,
		mixed $website = null,
		mixed $physicalAddress1 = null,
		mixed $physicalAddress2 = null,
		mixed $physicalSuburb = null,
		mixed $physicalCity = null,
		mixed $physicalPostcode = null,
		mixed $physicalState = null,
		mixed $physicalCountryId = null,
		mixed $postalAddress1 = null,
		mixed $postalAddress2 = null,
		mixed $postalSuburb = null,
		mixed $postalCity = null,
		mixed $postalPostcode = null,
		mixed $postalState = null,
		mixed $postalCountryId = null,
		mixed $customerGroupId = null,
		mixed $enableLoyalty = null,
		mixed $customField1 = null,
		mixed $customField2 = null,
		mixed $customField3 = null,
		mixed $customField4 = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateNewCustomer($customerCode, $name, $firstName, $lastName, $email, $yearToDate, $balance, $loyaltyBalance, $note, $gender, $dateOfBirth, $companyName, $doNotEmail, $contactSource, $phone, $mobile, $fax, $twitter, $website, $physicalAddress1, $physicalAddress2, $physicalSuburb, $physicalCity, $physicalPostcode, $physicalState, $physicalCountryId, $postalAddress1, $postalAddress2, $postalSuburb, $postalCity, $postalPostcode, $postalState, $postalCountryId, $customerGroupId, $enableLoyalty, $customField1, $customField2, $customField3, $customField4, $accept));
	}


	/**
	 * @param string $customerId
	 * @param string $accept
	 */
	public function getSingleCustomer(string $customerId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleCustomer($customerId, $accept));
	}


	/**
	 * @param string $customerId
	 * @param mixed $id
	 * @param mixed $customerCode
	 * @param mixed $name
	 * @param mixed $firstName
	 * @param mixed $lastName
	 * @param mixed $email
	 * @param mixed $yearToDate
	 * @param mixed $balance
	 * @param mixed $loyaltyBalance
	 * @param mixed $note
	 * @param mixed $gender
	 * @param mixed $dateOfBirth
	 * @param mixed $companyName
	 * @param mixed $doNotEmail
	 * @param mixed $contactSource
	 * @param mixed $phone
	 * @param mixed $mobile
	 * @param mixed $fax
	 * @param mixed $twitter
	 * @param mixed $website
	 * @param mixed $physicalAddress1
	 * @param mixed $physicalAddress2
	 * @param mixed $physicalSuburb
	 * @param mixed $physicalCity
	 * @param mixed $physicalPostcode
	 * @param mixed $physicalState
	 * @param mixed $physicalCountryId
	 * @param mixed $postalAddress1
	 * @param mixed $postalAddress2
	 * @param mixed $postalSuburb
	 * @param mixed $postalCity
	 * @param mixed $postalPostcode
	 * @param mixed $postalState
	 * @param mixed $postalCountryId
	 * @param mixed $customerGroupId
	 * @param mixed $enableLoyalty
	 * @param mixed $customField1
	 * @param mixed $customField2
	 * @param mixed $customField3
	 * @param mixed $customField4
	 * @param string $accept
	 */
	public function updateCustomer(
		string $customerId,
		mixed $id = null,
		mixed $customerCode = null,
		mixed $name = null,
		mixed $firstName = null,
		mixed $lastName = null,
		mixed $email = null,
		mixed $yearToDate = null,
		mixed $balance = null,
		mixed $loyaltyBalance = null,
		mixed $note = null,
		mixed $gender = null,
		mixed $dateOfBirth = null,
		mixed $companyName = null,
		mixed $doNotEmail = null,
		mixed $contactSource = null,
		mixed $phone = null,
		mixed $mobile = null,
		mixed $fax = null,
		mixed $twitter = null,
		mixed $website = null,
		mixed $physicalAddress1 = null,
		mixed $physicalAddress2 = null,
		mixed $physicalSuburb = null,
		mixed $physicalCity = null,
		mixed $physicalPostcode = null,
		mixed $physicalState = null,
		mixed $physicalCountryId = null,
		mixed $postalAddress1 = null,
		mixed $postalAddress2 = null,
		mixed $postalSuburb = null,
		mixed $postalCity = null,
		mixed $postalPostcode = null,
		mixed $postalState = null,
		mixed $postalCountryId = null,
		mixed $customerGroupId = null,
		mixed $enableLoyalty = null,
		mixed $customField1 = null,
		mixed $customField2 = null,
		mixed $customField3 = null,
		mixed $customField4 = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateCustomer($customerId, $id, $customerCode, $name, $firstName, $lastName, $email, $yearToDate, $balance, $loyaltyBalance, $note, $gender, $dateOfBirth, $companyName, $doNotEmail, $contactSource, $phone, $mobile, $fax, $twitter, $website, $physicalAddress1, $physicalAddress2, $physicalSuburb, $physicalCity, $physicalPostcode, $physicalState, $physicalCountryId, $postalAddress1, $postalAddress2, $postalSuburb, $postalCity, $postalPostcode, $postalState, $postalCountryId, $customerGroupId, $enableLoyalty, $customField1, $customField2, $customField3, $customField4, $accept));
	}


	/**
	 * @param string $customerId
	 * @param string $accept
	 */
	public function deleteCustomer(string $customerId, ?string $accept = null): Response
	{
		return $this->connector->send(new DeleteCustomer($customerId, $accept));
	}
}
