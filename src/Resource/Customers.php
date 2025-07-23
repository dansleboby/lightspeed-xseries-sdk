<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Customers\CreateNewCustomer;
use LightSpeed\XSeries\Requests\Customers\DeleteCustomer;
use LightSpeed\XSeries\Requests\Customers\GetSingleCustomer;
use LightSpeed\XSeries\Requests\Customers\ListCustomers;
use LightSpeed\XSeries\Requests\Customers\UpdateCustomer;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Customers extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 */
	public function listCustomers(?string $before, ?string $pageSize, ?string $deleted): Response
	{
		return $this->connector->send(new ListCustomers($before, $pageSize, $deleted));
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
	 */
	public function createNewCustomer(
		mixed $customerCode,
		mixed $name,
		mixed $firstName,
		mixed $lastName,
		mixed $email,
		mixed $yearToDate,
		mixed $balance,
		mixed $loyaltyBalance,
		mixed $note,
		mixed $gender,
		mixed $dateOfBirth,
		mixed $companyName,
		mixed $doNotEmail,
		mixed $contactSource,
		mixed $phone,
		mixed $mobile,
		mixed $fax,
		mixed $twitter,
		mixed $website,
		mixed $physicalAddress1,
		mixed $physicalAddress2,
		mixed $physicalSuburb,
		mixed $physicalCity,
		mixed $physicalPostcode,
		mixed $physicalState,
		mixed $physicalCountryId,
		mixed $postalAddress1,
		mixed $postalAddress2,
		mixed $postalSuburb,
		mixed $postalCity,
		mixed $postalPostcode,
		mixed $postalState,
		mixed $postalCountryId,
		mixed $customerGroupId,
		mixed $enableLoyalty,
		mixed $customField1,
		mixed $customField2,
		mixed $customField3,
		mixed $customField4,
	): Response
	{
		return $this->connector->send(new CreateNewCustomer($customerCode, $name, $firstName, $lastName, $email, $yearToDate, $balance, $loyaltyBalance, $note, $gender, $dateOfBirth, $companyName, $doNotEmail, $contactSource, $phone, $mobile, $fax, $twitter, $website, $physicalAddress1, $physicalAddress2, $physicalSuburb, $physicalCity, $physicalPostcode, $physicalState, $physicalCountryId, $postalAddress1, $postalAddress2, $postalSuburb, $postalCity, $postalPostcode, $postalState, $postalCountryId, $customerGroupId, $enableLoyalty, $customField1, $customField2, $customField3, $customField4));
	}


	/**
	 * @param string $customerId
	 */
	public function getSingleCustomer(string $customerId): Response
	{
		return $this->connector->send(new GetSingleCustomer($customerId));
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
	 */
	public function updateCustomer(
		string $customerId,
		mixed $id,
		mixed $customerCode,
		mixed $name,
		mixed $firstName,
		mixed $lastName,
		mixed $email,
		mixed $yearToDate,
		mixed $balance,
		mixed $loyaltyBalance,
		mixed $note,
		mixed $gender,
		mixed $dateOfBirth,
		mixed $companyName,
		mixed $doNotEmail,
		mixed $contactSource,
		mixed $phone,
		mixed $mobile,
		mixed $fax,
		mixed $twitter,
		mixed $website,
		mixed $physicalAddress1,
		mixed $physicalAddress2,
		mixed $physicalSuburb,
		mixed $physicalCity,
		mixed $physicalPostcode,
		mixed $physicalState,
		mixed $physicalCountryId,
		mixed $postalAddress1,
		mixed $postalAddress2,
		mixed $postalSuburb,
		mixed $postalCity,
		mixed $postalPostcode,
		mixed $postalState,
		mixed $postalCountryId,
		mixed $customerGroupId,
		mixed $enableLoyalty,
		mixed $customField1,
		mixed $customField2,
		mixed $customField3,
		mixed $customField4,
	): Response
	{
		return $this->connector->send(new UpdateCustomer($customerId, $id, $customerCode, $name, $firstName, $lastName, $email, $yearToDate, $balance, $loyaltyBalance, $note, $gender, $dateOfBirth, $companyName, $doNotEmail, $contactSource, $phone, $mobile, $fax, $twitter, $website, $physicalAddress1, $physicalAddress2, $physicalSuburb, $physicalCity, $physicalPostcode, $physicalState, $physicalCountryId, $postalAddress1, $postalAddress2, $postalSuburb, $postalCity, $postalPostcode, $postalState, $postalCountryId, $customerGroupId, $enableLoyalty, $customField1, $customField2, $customField3, $customField4));
	}


	/**
	 * @param string $customerId
	 */
	public function deleteCustomer(string $customerId): Response
	{
		return $this->connector->send(new DeleteCustomer($customerId));
	}
}
