<?php
/**
 * OrderExtendedForOrderGroupViewModel
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
 * OrderExtendedForOrderGroupViewModel Class Doc Comment
 *
 * @category Class
 * @description For orders inside OrderGroup companyId and currency should be null. This values should be inside OrderGroup.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderExtendedForOrderGroupViewModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderExtendedForOrderGroupViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '\Swagger\Client\Model\OrderId',
'ordered_at' => '\DateTime',
'last_changed_at' => '\DateTime',
'cancelled_at' => '\DateTime',
'from' => '\DateTime',
'to' => '\DateTime',
'status' => '\Swagger\Client\Model\OrderStatusViewModel',
'order_group_id' => '\Swagger\Client\Model\OrderGroupId',
'bookings' => '\Swagger\Client\Model\BookingViewModel[]',
'bookings_count' => 'int',
'order_total_price' => 'double',
'order_total_paid' => 'double',
'encrypted_company_id' => 'string',
'pdfs_endpoint' => 'string',
'pdfs' => '\Swagger\Client\Model\PdfViewModel[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'ordered_at' => 'date-time',
'last_changed_at' => 'date-time',
'cancelled_at' => 'date-time',
'from' => 'date-time',
'to' => 'date-time',
'status' => null,
'order_group_id' => null,
'bookings' => null,
'bookings_count' => 'int32',
'order_total_price' => 'double',
'order_total_paid' => 'double',
'encrypted_company_id' => null,
'pdfs_endpoint' => null,
'pdfs' => null    ];

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
        'id' => 'id',
'ordered_at' => 'orderedAt',
'last_changed_at' => 'lastChangedAt',
'cancelled_at' => 'cancelledAt',
'from' => 'from',
'to' => 'to',
'status' => 'status',
'order_group_id' => 'orderGroupId',
'bookings' => 'bookings',
'bookings_count' => 'bookingsCount',
'order_total_price' => 'orderTotalPrice',
'order_total_paid' => 'orderTotalPaid',
'encrypted_company_id' => 'encryptedCompanyId',
'pdfs_endpoint' => 'pdfsEndpoint',
'pdfs' => 'pdfs'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'ordered_at' => 'setOrderedAt',
'last_changed_at' => 'setLastChangedAt',
'cancelled_at' => 'setCancelledAt',
'from' => 'setFrom',
'to' => 'setTo',
'status' => 'setStatus',
'order_group_id' => 'setOrderGroupId',
'bookings' => 'setBookings',
'bookings_count' => 'setBookingsCount',
'order_total_price' => 'setOrderTotalPrice',
'order_total_paid' => 'setOrderTotalPaid',
'encrypted_company_id' => 'setEncryptedCompanyId',
'pdfs_endpoint' => 'setPdfsEndpoint',
'pdfs' => 'setPdfs'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'ordered_at' => 'getOrderedAt',
'last_changed_at' => 'getLastChangedAt',
'cancelled_at' => 'getCancelledAt',
'from' => 'getFrom',
'to' => 'getTo',
'status' => 'getStatus',
'order_group_id' => 'getOrderGroupId',
'bookings' => 'getBookings',
'bookings_count' => 'getBookingsCount',
'order_total_price' => 'getOrderTotalPrice',
'order_total_paid' => 'getOrderTotalPaid',
'encrypted_company_id' => 'getEncryptedCompanyId',
'pdfs_endpoint' => 'getPdfsEndpoint',
'pdfs' => 'getPdfs'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ordered_at'] = isset($data['ordered_at']) ? $data['ordered_at'] : null;
        $this->container['last_changed_at'] = isset($data['last_changed_at']) ? $data['last_changed_at'] : null;
        $this->container['cancelled_at'] = isset($data['cancelled_at']) ? $data['cancelled_at'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['order_group_id'] = isset($data['order_group_id']) ? $data['order_group_id'] : null;
        $this->container['bookings'] = isset($data['bookings']) ? $data['bookings'] : null;
        $this->container['bookings_count'] = isset($data['bookings_count']) ? $data['bookings_count'] : null;
        $this->container['order_total_price'] = isset($data['order_total_price']) ? $data['order_total_price'] : null;
        $this->container['order_total_paid'] = isset($data['order_total_paid']) ? $data['order_total_paid'] : null;
        $this->container['encrypted_company_id'] = isset($data['encrypted_company_id']) ? $data['encrypted_company_id'] : null;
        $this->container['pdfs_endpoint'] = isset($data['pdfs_endpoint']) ? $data['pdfs_endpoint'] : null;
        $this->container['pdfs'] = isset($data['pdfs']) ? $data['pdfs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return \Swagger\Client\Model\OrderId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \Swagger\Client\Model\OrderId $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ordered_at
     *
     * @return \DateTime
     */
    public function getOrderedAt()
    {
        return $this->container['ordered_at'];
    }

    /**
     * Sets ordered_at
     *
     * @param \DateTime $ordered_at Gets or sets OrderedAt.
     *
     * @return $this
     */
    public function setOrderedAt($ordered_at)
    {
        $this->container['ordered_at'] = $ordered_at;

        return $this;
    }

    /**
     * Gets last_changed_at
     *
     * @return \DateTime
     */
    public function getLastChangedAt()
    {
        return $this->container['last_changed_at'];
    }

    /**
     * Sets last_changed_at
     *
     * @param \DateTime $last_changed_at Gets or sets LastChangedAt.
     *
     * @return $this
     */
    public function setLastChangedAt($last_changed_at)
    {
        $this->container['last_changed_at'] = $last_changed_at;

        return $this;
    }

    /**
     * Gets cancelled_at
     *
     * @return \DateTime
     */
    public function getCancelledAt()
    {
        return $this->container['cancelled_at'];
    }

    /**
     * Sets cancelled_at
     *
     * @param \DateTime $cancelled_at Gets or sets CancelledAt.
     *
     * @return $this
     */
    public function setCancelledAt($cancelled_at)
    {
        $this->container['cancelled_at'] = $cancelled_at;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \DateTime $from Gets or sets From date.
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \DateTime $to Gets or sets To date.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\OrderStatusViewModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\OrderStatusViewModel $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets bookings
     *
     * @return \Swagger\Client\Model\BookingViewModel[]
     */
    public function getBookings()
    {
        return $this->container['bookings'];
    }

    /**
     * Sets bookings
     *
     * @param \Swagger\Client\Model\BookingViewModel[] $bookings Gets or sets order bookings list.
     *
     * @return $this
     */
    public function setBookings($bookings)
    {
        $this->container['bookings'] = $bookings;

        return $this;
    }

    /**
     * Gets bookings_count
     *
     * @return int
     */
    public function getBookingsCount()
    {
        return $this->container['bookings_count'];
    }

    /**
     * Sets bookings_count
     *
     * @param int $bookings_count Gets or sets bookings count in order.
     *
     * @return $this
     */
    public function setBookingsCount($bookings_count)
    {
        $this->container['bookings_count'] = $bookings_count;

        return $this;
    }

    /**
     * Gets order_total_price
     *
     * @return double
     */
    public function getOrderTotalPrice()
    {
        return $this->container['order_total_price'];
    }

    /**
     * Sets order_total_price
     *
     * @param double $order_total_price Gets or sets order total price.
     *
     * @return $this
     */
    public function setOrderTotalPrice($order_total_price)
    {
        $this->container['order_total_price'] = $order_total_price;

        return $this;
    }

    /**
     * Gets order_total_paid
     *
     * @return double
     */
    public function getOrderTotalPaid()
    {
        return $this->container['order_total_paid'];
    }

    /**
     * Sets order_total_paid
     *
     * @param double $order_total_paid Gets or sets order total paid.
     *
     * @return $this
     */
    public function setOrderTotalPaid($order_total_paid)
    {
        $this->container['order_total_paid'] = $order_total_paid;

        return $this;
    }

    /**
     * Gets encrypted_company_id
     *
     * @return string
     */
    public function getEncryptedCompanyId()
    {
        return $this->container['encrypted_company_id'];
    }

    /**
     * Sets encrypted_company_id
     *
     * @param string $encrypted_company_id Gets or sets encrypted company Id.
     *
     * @return $this
     */
    public function setEncryptedCompanyId($encrypted_company_id)
    {
        $this->container['encrypted_company_id'] = $encrypted_company_id;

        return $this;
    }

    /**
     * Gets pdfs_endpoint
     *
     * @return string
     */
    public function getPdfsEndpoint()
    {
        return $this->container['pdfs_endpoint'];
    }

    /**
     * Sets pdfs_endpoint
     *
     * @param string $pdfs_endpoint Gets or sets pdfs endpoint.
     *
     * @return $this
     */
    public function setPdfsEndpoint($pdfs_endpoint)
    {
        $this->container['pdfs_endpoint'] = $pdfs_endpoint;

        return $this;
    }

    /**
     * Gets pdfs
     *
     * @return \Swagger\Client\Model\PdfViewModel[]
     */
    public function getPdfs()
    {
        return $this->container['pdfs'];
    }

    /**
     * Sets pdfs
     *
     * @param \Swagger\Client\Model\PdfViewModel[] $pdfs Gets or sets pdfs info.
     *
     * @return $this
     */
    public function setPdfs($pdfs)
    {
        $this->container['pdfs'] = $pdfs;

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