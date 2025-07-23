<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PriceBooks\AddPriceBookProducts;
use LightSpeed\XSeries\Requests\PriceBooks\CreatePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\DeletePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\DeletePriceBookProducts;
use LightSpeed\XSeries\Requests\PriceBooks\GetPriceBookProductsForPriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\GetPriceBookbyId;
use LightSpeed\XSeries\Requests\PriceBooks\ListPriceBookProducts;
use LightSpeed\XSeries\Requests\PriceBooks\ListPriceBooks;
use LightSpeed\XSeries\Requests\PriceBooks\UpdatePriceBook;
use LightSpeed\XSeries\Requests\PriceBooks\UpdatePriceBookProducts;
use LightSpeed\XSeries\Requests\PriceBooks\UpdatePriceBookProductsWithPutOp;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PriceBooks extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listPriceBookProducts(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListPriceBookProducts($after, $before, $pageSize));
	}


	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listPriceBooks(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListPriceBooks($after, $before, $pageSize));
	}


	public function createPriceBook(): Response
	{
		return $this->connector->send(new CreatePriceBook());
	}


	/**
	 * @param string $priceBookId The price book id
	 */
	public function getPriceBookbyId(string $priceBookId): Response
	{
		return $this->connector->send(new GetPriceBookbyId($priceBookId));
	}


	/**
	 * @param string $priceBookId The price book id
	 */
	public function updatePriceBook(string $priceBookId): Response
	{
		return $this->connector->send(new UpdatePriceBook($priceBookId));
	}


	/**
	 * @param string $priceBookId Valid Price Book ID.
	 */
	public function deletePriceBook(string $priceBookId): Response
	{
		return $this->connector->send(new DeletePriceBook($priceBookId));
	}


	/**
	 * @param string $priceBookId The price book id
	 * @param string $productIds The product ids
	 */
	public function getPriceBookProductsForPriceBook(string $priceBookId, ?string $productIds = null): Response
	{
		return $this->connector->send(new GetPriceBookProductsForPriceBook($priceBookId, $productIds));
	}


	/**
	 * @param string $priceBookId The price book id
	 */
	public function updatePriceBookProductsWithPutOp(string $priceBookId): Response
	{
		return $this->connector->send(new UpdatePriceBookProductsWithPutOp($priceBookId));
	}


	/**
	 * @param string $priceBookId The price book id
	 */
	public function addPriceBookProducts(string $priceBookId): Response
	{
		return $this->connector->send(new AddPriceBookProducts($priceBookId));
	}


	/**
	 * @param string $priceBookId The price book id
	 */
	public function deletePriceBookProducts(string $priceBookId): Response
	{
		return $this->connector->send(new DeletePriceBookProducts($priceBookId));
	}


	/**
	 * @param string $priceBookId The price book id
	 */
	public function updatePriceBookProducts(string $priceBookId): Response
	{
		return $this->connector->send(new UpdatePriceBookProducts($priceBookId));
	}
}
