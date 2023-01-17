<?php
/**
 * BookingViewModel
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
 * BookingViewModel Class Doc Comment
 *
 * @category Class
 * @description Model contains data about booking.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingViewModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookingViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => '\Swagger\Client\Model\BookingId',
'standard_name' => 'string',
'name' => 'string',
'notes' => 'string',
'guests_names' => 'string',
'number_of_people' => 'int',
'count' => 'double',
'total' => 'double',
'price' => 'double',
'unit_type' => '\Swagger\Client\Model\TimeUnitTypeViewModel',
'status' => '\Swagger\Client\Model\BookingStatusViewModel',
'type' => '\Swagger\Client\Model\BookingTypeViewModel',
'from_date' => '\DateTime',
'to_date' => '\DateTime',
'sub_bookings' => '\Swagger\Client\Model\BookingViewModel[]',
'people' => '\Swagger\Client\Model\PersonViewModel[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'standard_name' => null,
'name' => null,
'notes' => null,
'guests_names' => null,
'number_of_people' => 'int32',
'count' => 'double',
'total' => 'double',
'price' => 'double',
'unit_type' => null,
'status' => null,
'type' => null,
'from_date' => 'date-time',
'to_date' => 'date-time',
'sub_bookings' => null,
'people' => null    ];

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
'standard_name' => 'standardName',
'name' => 'name',
'notes' => 'notes',
'guests_names' => 'guestsNames',
'number_of_people' => 'numberOfPeople',
'count' => 'count',
'total' => 'total',
'price' => 'price',
'unit_type' => 'unitType',
'status' => 'status',
'type' => 'type',
'from_date' => 'fromDate',
'to_date' => 'toDate',
'sub_bookings' => 'subBookings',
'people' => 'people'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'standard_name' => 'setStandardName',
'name' => 'setName',
'notes' => 'setNotes',
'guests_names' => 'setGuestsNames',
'number_of_people' => 'setNumberOfPeople',
'count' => 'setCount',
'total' => 'setTotal',
'price' => 'setPrice',
'unit_type' => 'setUnitType',
'status' => 'setStatus',
'type' => 'setType',
'from_date' => 'setFromDate',
'to_date' => 'setToDate',
'sub_bookings' => 'setSubBookings',
'people' => 'setPeople'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'standard_name' => 'getStandardName',
'name' => 'getName',
'notes' => 'getNotes',
'guests_names' => 'getGuestsNames',
'number_of_people' => 'getNumberOfPeople',
'count' => 'getCount',
'total' => 'getTotal',
'price' => 'getPrice',
'unit_type' => 'getUnitType',
'status' => 'getStatus',
'type' => 'getType',
'from_date' => 'getFromDate',
'to_date' => 'getToDate',
'sub_bookings' => 'getSubBookings',
'people' => 'getPeople'    ];

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
        $this->container['standard_name'] = isset($data['standard_name']) ? $data['standard_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['guests_names'] = isset($data['guests_names']) ? $data['guests_names'] : null;
        $this->container['number_of_people'] = isset($data['number_of_people']) ? $data['number_of_people'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['unit_type'] = isset($data['unit_type']) ? $data['unit_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['sub_bookings'] = isset($data['sub_bookings']) ? $data['sub_bookings'] : null;
        $this->container['people'] = isset($data['people']) ? $data['people'] : null;
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
     * @return \Swagger\Client\Model\BookingId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \Swagger\Client\Model\BookingId $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets standard_name
     *
     * @return string
     */
    public function getStandardName()
    {
        return $this->container['standard_name'];
    }

    /**
     * Sets standard_name
     *
     * @param string $standard_name Gets or sets standart name.
     *
     * @return $this
     */
    public function setStandardName($standard_name)
    {
        $this->container['standard_name'] = $standard_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Gets or sets Booking Name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Gets or sets Notes.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets guests_names
     *
     * @return string
     */
    public function getGuestsNames()
    {
        return $this->container['guests_names'];
    }

    /**
     * Sets guests_names
     *
     * @param string $guests_names Gets or sets guests names.
     *
     * @return $this
     */
    public function setGuestsNames($guests_names)
    {
        $this->container['guests_names'] = $guests_names;

        return $this;
    }

    /**
     * Gets number_of_people
     *
     * @return int
     */
    public function getNumberOfPeople()
    {
        return $this->container['number_of_people'];
    }

    /**
     * Sets number_of_people
     *
     * @param int $number_of_people Gets or sets number of people in booking.
     *
     * @return $this
     */
    public function setNumberOfPeople($number_of_people)
    {
        $this->container['number_of_people'] = $number_of_people;

        return $this;
    }

    /**
     * Gets count
     *
     * @return double
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param double $count Gets or sets items count in booking.
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double $total Gets or sets booking total price.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Gets or sets booking price.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return \Swagger\Client\Model\TimeUnitTypeViewModel
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param \Swagger\Client\Model\TimeUnitTypeViewModel $unit_type unit_type
     *
     * @return $this
     */
    public function setUnitType($unit_type)
    {
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\BookingStatusViewModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\BookingStatusViewModel $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\BookingTypeViewModel
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\BookingTypeViewModel $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date Gets or sets date from.
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date Gets or sets date To.
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets sub_bookings
     *
     * @return \Swagger\Client\Model\BookingViewModel[]
     */
    public function getSubBookings()
    {
        return $this->container['sub_bookings'];
    }

    /**
     * Sets sub_bookings
     *
     * @param \Swagger\Client\Model\BookingViewModel[] $sub_bookings Gets or sets sub bookings.
     *
     * @return $this
     */
    public function setSubBookings($sub_bookings)
    {
        $this->container['sub_bookings'] = $sub_bookings;

        return $this;
    }

    /**
     * Gets people
     *
     * @return \Swagger\Client\Model\PersonViewModel[]
     */
    public function getPeople()
    {
        return $this->container['people'];
    }

    /**
     * Sets people
     *
     * @param \Swagger\Client\Model\PersonViewModel[] $people Gets or sets people in booking.
     *
     * @return $this
     */
    public function setPeople($people)
    {
        $this->container['people'] = $people;

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