<?php
/**
 * Field
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
 * Field Class Doc Comment
 *
 * @category Class
 * @description Stores info about field of customer info.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Field implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Field';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'label' => 'string',
'field_type' => '\Swagger\Client\Model\FieldType',
'limitations' => '\Swagger\Client\Model\Limitation',
'choices' => '\Swagger\Client\Model\Choice[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'label' => null,
'field_type' => null,
'limitations' => null,
'choices' => null    ];

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
        'name' => 'name',
'label' => 'label',
'field_type' => 'fieldType',
'limitations' => 'limitations',
'choices' => 'choices'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'label' => 'setLabel',
'field_type' => 'setFieldType',
'limitations' => 'setLimitations',
'choices' => 'setChoices'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'label' => 'getLabel',
'field_type' => 'getFieldType',
'limitations' => 'getLimitations',
'choices' => 'getChoices'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['limitations'] = isset($data['limitations']) ? $data['limitations'] : null;
        $this->container['choices'] = isset($data['choices']) ? $data['choices'] : null;
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
     * @param string $name Gets or sets name of field.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Gets or sets label of field.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return \Swagger\Client\Model\FieldType
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param \Swagger\Client\Model\FieldType $field_type field_type
     *
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets limitations
     *
     * @return \Swagger\Client\Model\Limitation
     */
    public function getLimitations()
    {
        return $this->container['limitations'];
    }

    /**
     * Sets limitations
     *
     * @param \Swagger\Client\Model\Limitation $limitations limitations
     *
     * @return $this
     */
    public function setLimitations($limitations)
    {
        $this->container['limitations'] = $limitations;

        return $this;
    }

    /**
     * Gets choices
     *
     * @return \Swagger\Client\Model\Choice[]
     */
    public function getChoices()
    {
        return $this->container['choices'];
    }

    /**
     * Sets choices
     *
     * @param \Swagger\Client\Model\Choice[] $choices Gets or sets field choices.
     *
     * @return $this
     */
    public function setChoices($choices)
    {
        $this->container['choices'] = $choices;

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
