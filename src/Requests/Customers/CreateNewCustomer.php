<?php

namespace LightSpeed\XSeries\Requests\Customers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a new customer
 */
class CreateNewCustomer extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/customers";
	}


	/**
	 * @param null|mixed $customerCode
	 * @param null|mixed $name
	 * @param null|mixed $firstName
	 * @param null|mixed $lastName
	 * @param null|mixed $email
	 * @param null|mixed $yearToDate
	 * @param null|mixed $balance
	 * @param null|mixed $loyaltyBalance
	 * @param null|mixed $note
	 * @param null|mixed $gender
	 * @param null|mixed $dateOfBirth
	 * @param null|mixed $companyName
	 * @param null|mixed $doNotEmail
	 * @param null|mixed $contactSource
	 * @param null|mixed $phone
	 * @param null|mixed $mobile
	 * @param null|mixed $fax
	 * @param null|mixed $twitter
	 * @param null|mixed $website
	 * @param null|mixed $physicalAddress1
	 * @param null|mixed $physicalAddress2
	 * @param null|mixed $physicalSuburb
	 * @param null|mixed $physicalCity
	 * @param null|mixed $physicalPostcode
	 * @param null|mixed $physicalState
	 * @param null|mixed $physicalCountryId
	 * @param null|mixed $postalAddress1
	 * @param null|mixed $postalAddress2
	 * @param null|mixed $postalSuburb
	 * @param null|mixed $postalCity
	 * @param null|mixed $postalPostcode
	 * @param null|mixed $postalState
	 * @param null|mixed $postalCountryId
	 * @param null|mixed $customerGroupId
	 * @param null|mixed $enableLoyalty
	 * @param null|mixed $customField1
	 * @param null|mixed $customField2
	 * @param null|mixed $customField3
	 * @param null|mixed $customField4
	 */
	public function __construct(
		protected mixed $customerCode = null,
		protected mixed $name = null,
		protected mixed $firstName = null,
		protected mixed $lastName = null,
		protected mixed $email = null,
		protected mixed $yearToDate = null,
		protected mixed $balance = null,
		protected mixed $loyaltyBalance = null,
		protected mixed $note = null,
		protected mixed $gender = null,
		protected mixed $dateOfBirth = null,
		protected mixed $companyName = null,
		protected mixed $doNotEmail = null,
		protected mixed $contactSource = null,
		protected mixed $phone = null,
		protected mixed $mobile = null,
		protected mixed $fax = null,
		protected mixed $twitter = null,
		protected mixed $website = null,
		protected mixed $physicalAddress1 = null,
		protected mixed $physicalAddress2 = null,
		protected mixed $physicalSuburb = null,
		protected mixed $physicalCity = null,
		protected mixed $physicalPostcode = null,
		protected mixed $physicalState = null,
		protected mixed $physicalCountryId = null,
		protected mixed $postalAddress1 = null,
		protected mixed $postalAddress2 = null,
		protected mixed $postalSuburb = null,
		protected mixed $postalCity = null,
		protected mixed $postalPostcode = null,
		protected mixed $postalState = null,
		protected mixed $postalCountryId = null,
		protected mixed $customerGroupId = null,
		protected mixed $enableLoyalty = null,
		protected mixed $customField1 = null,
		protected mixed $customField2 = null,
		protected mixed $customField3 = null,
		protected mixed $customField4 = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'customer_code' => $this->customerCode,
			'name' => $this->name,
			'first_name' => $this->firstName,
			'last_name' => $this->lastName,
			'email' => $this->email,
			'year_to_date' => $this->yearToDate,
			'balance' => $this->balance,
			'loyalty_balance' => $this->loyaltyBalance,
			'note' => $this->note,
			'gender' => $this->gender,
			'date_of_birth' => $this->dateOfBirth,
			'company_name' => $this->companyName,
			'do_not_email' => $this->doNotEmail,
			'contact_source' => $this->contactSource,
			'phone' => $this->phone,
			'mobile' => $this->mobile,
			'fax' => $this->fax,
			'twitter' => $this->twitter,
			'website' => $this->website,
			'physical_address_1' => $this->physicalAddress1,
			'physical_address_2' => $this->physicalAddress2,
			'physical_suburb' => $this->physicalSuburb,
			'physical_city' => $this->physicalCity,
			'physical_postcode' => $this->physicalPostcode,
			'physical_state' => $this->physicalState,
			'physical_country_id' => $this->physicalCountryId,
			'postal_address_1' => $this->postalAddress1,
			'postal_address_2' => $this->postalAddress2,
			'postal_suburb' => $this->postalSuburb,
			'postal_city' => $this->postalCity,
			'postal_postcode' => $this->postalPostcode,
			'postal_state' => $this->postalState,
			'postal_country_id' => $this->postalCountryId,
			'customer_group_id' => $this->customerGroupId,
			'enable_loyalty' => $this->enableLoyalty,
			'custom_field_1' => $this->customField1,
			'custom_field_2' => $this->customField2,
			'custom_field_3' => $this->customField3,
			'custom_field_4' => $this->customField4,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
