<?php
/**
 * PaySpecificOrderModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VisBook booking-API
 *
 * ## About localization/internationalization We currently support 6 languages: **Norwegian, English, Swedish, Danish, German, Russian**,  The fallback language is always **english**.  Translations are used for products and properties returned by the api, but the quality will depend on the hotel to have provided translations in the requested language.   Specify the language you want to use by using the [Accept-Language](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language) header.  ## About reservations  Once you make a reservation, you take up capacity at the hotel. Reservations must be kept alive every 40 seconds, else they expire to free up the capacity. When doing checkout (i.e when the user is sent to the payment processor), the expiration of the reservation is extended by 20 minutes. This means you do not need to ping the api while the user is \"away\" doing payment.   There is a **hard limit of 30 minutes before reservations are expired** no questions asked.**   This is to avoid someone holding capacity indefinitely.  ## About authorization Before a guest is able to do payment/checkout, the guest must have a valid cookie. This is obtained by doing the login/validation flow. The `/login` request sends the user a one-time-passord on the selected medium (email, sms). This code must be returned to us via the `/validation` endpoint within reasonable time. `/validation` will return a httpOnly cookie, which must be present when doing `/checkout`. This cookie must also be present if you want to use endpoints that relate to customer data, like `/orders` and `/user`.   `/validation` also returns customer data, *if the customer exists*, which can be used to \"pre-fill\" customer data for checkout.  ## About checkout #### Amount The client is responsible for calculating an `amount`, which is the amount the guest should pay. This serves as a security mechanism, to see that the client and server *agrees* on the amount, to make sure there hasn't been any \"mismatch\" between client and server.  #### PaymentType The client should make a call to `/checkout/paymentTypes` to see which payment types are available.  #### Terms The client should make a call to `/setup/terms` to present the terms to the user. Checkout is only possible if `acceptedTerms` is `true`.  #### Error/Success Upon success, the user will be forwarded to `successUrl`, with `orderGroup` as a query parameter. Example: https://reservations.visbook.com/5252/order?orderGroupId=1111111   You can then use orderGroupId to call `/ordergroups/{id}` to present an online order confirmation. Sms/Email order confirmation is handled by the api automatically.  Upon error, the user will be forwarded to `errorUrl` with the query parameter `errorCode`. Example: https://reservations.visbook.com/1047/checkout?errorCode=1  Where errorCode conforms to the following table:  | ErrorCode | Description | | --------- | ----------- |  | 1 | Unable to reserve the amount on the card. Contact card issuer. | | 2 | Unable to capture the amount on the card. Contact card issuer. | | 3 | Unable to query the payment provider about the transaction. Contact the hotel. | | 4 | Unable to annul (refund) the transaction. Contact the hotel. | | 6 | Unable to set order to status paid. Contact the hotel. | | 7 | Unknown response from the payment processor. Contact the hotel. | | 8 | Unable to find the order. Contact the hotel. | | 9 | The order has been modified by someone else. Contact the hotel. | | 10 | Unable to save the order. Accounting error due to amount being lower than required fixed amount on this account. Contact the hotel. | | 11 | Unable to save the order, there's an error with the price. Contact the hotel. | | 12 | Unable to save the order, the invoice customer was not found. Contact the hotel. | | 13 | Some reservations have expired. Try again. | | 14 | Unable to process sale. Contact card issuer. |  ## General flow  1. Create product reservations via `/reservations` endpoint 2. Keep reservations alive every 30-40 seconds via `/reservations/ping` (If you don't your reservations will expire) 3. Authorize guest via /login and /validation to receive a cookie you can use to checkout 4. Complete the order via /checkout. The guest _must_ be authorized before this step is possible.
 *
 * OpenAPI spec version: 8.38.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PaySpecificOrderModel Class Doc Comment
 *
 * @category Class
 * @description Pay specific order.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaySpecificOrderModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaySpecificOrderModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => '\Swagger\Client\Model\OrderId',
'order_group_id' => '\Swagger\Client\Model\OrderGroupId',
'token' => 'string',
'success_url' => 'string',
'error_url' => 'string',
'payment_type' => '\Swagger\Client\Model\WebEntityPaymentTypeViewModel',
'amount' => 'double',
'accepted_terms' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => null,
'order_group_id' => null,
'token' => null,
'success_url' => 'uri',
'error_url' => 'uri',
'payment_type' => null,
'amount' => 'double',
'accepted_terms' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_id' => 'orderId',
'order_group_id' => 'orderGroupId',
'token' => 'token',
'success_url' => 'successUrl',
'error_url' => 'errorUrl',
'payment_type' => 'paymentType',
'amount' => 'amount',
'accepted_terms' => 'acceptedTerms'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
'order_group_id' => 'setOrderGroupId',
'token' => 'setToken',
'success_url' => 'setSuccessUrl',
'error_url' => 'setErrorUrl',
'payment_type' => 'setPaymentType',
'amount' => 'setAmount',
'accepted_terms' => 'setAcceptedTerms'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
'order_group_id' => 'getOrderGroupId',
'token' => 'getToken',
'success_url' => 'getSuccessUrl',
'error_url' => 'getErrorUrl',
'payment_type' => 'getPaymentType',
'amount' => 'getAmount',
'accepted_terms' => 'getAcceptedTerms'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_group_id'] = isset($data['order_group_id']) ? $data['order_group_id'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['success_url'] = isset($data['success_url']) ? $data['success_url'] : null;
        $this->container['error_url'] = isset($data['error_url']) ? $data['error_url'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['accepted_terms'] = isset($data['accepted_terms']) ? $data['accepted_terms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['order_group_id'] === null) {
            $invalidProperties[] = "'order_group_id' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['success_url'] === null) {
            $invalidProperties[] = "'success_url' can't be null";
        }
        if ($this->container['error_url'] === null) {
            $invalidProperties[] = "'error_url' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['accepted_terms'] === null) {
            $invalidProperties[] = "'accepted_terms' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets order_id
     *
     * @return \Swagger\Client\Model\OrderId
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param \Swagger\Client\Model\OrderId $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_group_id
     *
     * @return \Swagger\Client\Model\OrderGroupId
     */
    public function getOrderGroupId()
    {
        return $this->container['order_group_id'];
    }

    /**
     * Sets order_group_id
     *
     * @param \Swagger\Client\Model\OrderGroupId $order_group_id order_group_id
     *
     * @return $this
     */
    public function setOrderGroupId($order_group_id)
    {
        $this->container['order_group_id'] = $order_group_id;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Gets or sets token.
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url Gets or sets Success url. If user successfully paid he will be redirected to this url.  OrdergroupId will be appended to this url Api.Features.Checkout.PaySpecificOrderModel.OrderGroupId.
     *
     * @return $this
     */
    public function setSuccessUrl($success_url)
    {
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets error_url
     *
     * @return string
     */
    public function getErrorUrl()
    {
        return $this->container['error_url'];
    }

    /**
     * Sets error_url
     *
     * @param string $error_url Gets or sets Error url. If user has an error during payment process he will be redirected to this url.  Error code will be appended to this url Api.Features.Checkout.ProcessPaymentStatus.
     *
     * @return $this
     */
    public function setErrorUrl($error_url)
    {
        $this->container['error_url'] = $error_url;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return \Swagger\Client\Model\WebEntityPaymentTypeViewModel
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param \Swagger\Client\Model\WebEntityPaymentTypeViewModel $payment_type payment_type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Gets or sets amount money of all reservations prices.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets accepted_terms
     *
     * @return bool
     */
    public function getAcceptedTerms()
    {
        return $this->container['accepted_terms'];
    }

    /**
     * Sets accepted_terms
     *
     * @param bool $accepted_terms Gets or sets a value indicating whether it indicates whether a user agrees to the terms or not.
     *
     * @return $this
     */
    public function setAcceptedTerms($accepted_terms)
    {
        $this->container['accepted_terms'] = $accepted_terms;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
