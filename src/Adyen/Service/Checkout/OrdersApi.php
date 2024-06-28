<?php
/**
 * Adyen Checkout API
 *
 * The version of the OpenAPI document: 71
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Adyen\Service\Checkout;

use Adyen\AdyenException;
use Adyen\Client;
use Adyen\Service;
use Adyen\Model\Checkout\ObjectSerializer;

class OrdersApi extends Service
{
    /**
     * @var array|string|string[]
     */
    private $baseURL;

    /**
     * OrdersApi constructor.
     *
     * @param \Adyen\Client $client
     * @throws AdyenException
     */
    public function __construct(Client $client)
    {
        parent::__construct($client);

        // Create the baseUrl based on live/test and optional live-url-prefix
        $this->baseURL = $this->createBaseUrl("https://checkout-test.adyen.com/v71");
    }

    /**
    * Create an order
    *
    * @param \Adyen\Model\Checkout\CreateOrderRequest $createOrderRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\CreateOrderResponse
    * @throws AdyenException
    */
    public function orders(\Adyen\Model\Checkout\CreateOrderRequest $createOrderRequest, array $requestOptions = null): \Adyen\Model\Checkout\CreateOrderResponse
    {
        $endpoint = $this->baseURL . "/orders";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $createOrderRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\CreateOrderResponse::class);
    }

    /**
    * Cancel an order
    *
    * @param \Adyen\Model\Checkout\CancelOrderRequest $cancelOrderRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\CancelOrderResponse
    * @throws AdyenException
    */
    public function cancelOrder(\Adyen\Model\Checkout\CancelOrderRequest $cancelOrderRequest, array $requestOptions = null): \Adyen\Model\Checkout\CancelOrderResponse
    {
        $endpoint = $this->baseURL . "/orders/cancel";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $cancelOrderRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\CancelOrderResponse::class);
    }

    /**
    * Get the balance of a gift card
    *
    * @param \Adyen\Model\Checkout\BalanceCheckRequest $balanceCheckRequest
    * @param array|null $requestOptions
    * @return \Adyen\Model\Checkout\BalanceCheckResponse
    * @throws AdyenException
    */
    public function getBalanceOfGiftCard(\Adyen\Model\Checkout\BalanceCheckRequest $balanceCheckRequest, array $requestOptions = null): \Adyen\Model\Checkout\BalanceCheckResponse
    {
        $endpoint = $this->baseURL . "/paymentMethods/balance";
        $response = $this->requestHttp($endpoint, strtolower('POST'), (array) $balanceCheckRequest->jsonSerialize(), $requestOptions);
        return ObjectSerializer::deserialize($response, \Adyen\Model\Checkout\BalanceCheckResponse::class);
    }
}
