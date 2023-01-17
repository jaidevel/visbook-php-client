<?php
/**
 * PropertyInfo
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
 * PropertyInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'declaring_type' => '\Swagger\Client\Model\Type',
'reflected_type' => '\Swagger\Client\Model\Type',
'module' => '\Swagger\Client\Model\Module',
'custom_attributes' => '\Swagger\Client\Model\CustomAttributeData[]',
'is_collectible' => 'bool',
'metadata_token' => 'int',
'member_type' => '\Swagger\Client\Model\MemberTypes',
'property_type' => '\Swagger\Client\Model\Type',
'attributes' => '\Swagger\Client\Model\PropertyAttributes',
'is_special_name' => 'bool',
'can_read' => 'bool',
'can_write' => 'bool',
'get_method' => '\Swagger\Client\Model\MethodInfo',
'set_method' => '\Swagger\Client\Model\MethodInfo'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'declaring_type' => null,
'reflected_type' => null,
'module' => null,
'custom_attributes' => null,
'is_collectible' => null,
'metadata_token' => 'int32',
'member_type' => null,
'property_type' => null,
'attributes' => null,
'is_special_name' => null,
'can_read' => null,
'can_write' => null,
'get_method' => null,
'set_method' => null    ];

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
'declaring_type' => 'declaringType',
'reflected_type' => 'reflectedType',
'module' => 'module',
'custom_attributes' => 'customAttributes',
'is_collectible' => 'isCollectible',
'metadata_token' => 'metadataToken',
'member_type' => 'memberType',
'property_type' => 'propertyType',
'attributes' => 'attributes',
'is_special_name' => 'isSpecialName',
'can_read' => 'canRead',
'can_write' => 'canWrite',
'get_method' => 'getMethod',
'set_method' => 'setMethod'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'declaring_type' => 'setDeclaringType',
'reflected_type' => 'setReflectedType',
'module' => 'setModule',
'custom_attributes' => 'setCustomAttributes',
'is_collectible' => 'setIsCollectible',
'metadata_token' => 'setMetadataToken',
'member_type' => 'setMemberType',
'property_type' => 'setPropertyType',
'attributes' => 'setAttributes',
'is_special_name' => 'setIsSpecialName',
'can_read' => 'setCanRead',
'can_write' => 'setCanWrite',
'get_method' => 'setGetMethod',
'set_method' => 'setSetMethod'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'declaring_type' => 'getDeclaringType',
'reflected_type' => 'getReflectedType',
'module' => 'getModule',
'custom_attributes' => 'getCustomAttributes',
'is_collectible' => 'getIsCollectible',
'metadata_token' => 'getMetadataToken',
'member_type' => 'getMemberType',
'property_type' => 'getPropertyType',
'attributes' => 'getAttributes',
'is_special_name' => 'getIsSpecialName',
'can_read' => 'getCanRead',
'can_write' => 'getCanWrite',
'get_method' => 'getGetMethod',
'set_method' => 'getSetMethod'    ];

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
        $this->container['declaring_type'] = isset($data['declaring_type']) ? $data['declaring_type'] : null;
        $this->container['reflected_type'] = isset($data['reflected_type']) ? $data['reflected_type'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['custom_attributes'] = isset($data['custom_attributes']) ? $data['custom_attributes'] : null;
        $this->container['is_collectible'] = isset($data['is_collectible']) ? $data['is_collectible'] : null;
        $this->container['metadata_token'] = isset($data['metadata_token']) ? $data['metadata_token'] : null;
        $this->container['member_type'] = isset($data['member_type']) ? $data['member_type'] : null;
        $this->container['property_type'] = isset($data['property_type']) ? $data['property_type'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['is_special_name'] = isset($data['is_special_name']) ? $data['is_special_name'] : null;
        $this->container['can_read'] = isset($data['can_read']) ? $data['can_read'] : null;
        $this->container['can_write'] = isset($data['can_write']) ? $data['can_write'] : null;
        $this->container['get_method'] = isset($data['get_method']) ? $data['get_method'] : null;
        $this->container['set_method'] = isset($data['set_method']) ? $data['set_method'] : null;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets declaring_type
     *
     * @return \Swagger\Client\Model\Type
     */
    public function getDeclaringType()
    {
        return $this->container['declaring_type'];
    }

    /**
     * Sets declaring_type
     *
     * @param \Swagger\Client\Model\Type $declaring_type declaring_type
     *
     * @return $this
     */
    public function setDeclaringType($declaring_type)
    {
        $this->container['declaring_type'] = $declaring_type;

        return $this;
    }

    /**
     * Gets reflected_type
     *
     * @return \Swagger\Client\Model\Type
     */
    public function getReflectedType()
    {
        return $this->container['reflected_type'];
    }

    /**
     * Sets reflected_type
     *
     * @param \Swagger\Client\Model\Type $reflected_type reflected_type
     *
     * @return $this
     */
    public function setReflectedType($reflected_type)
    {
        $this->container['reflected_type'] = $reflected_type;

        return $this;
    }

    /**
     * Gets module
     *
     * @return \Swagger\Client\Model\Module
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param \Swagger\Client\Model\Module $module module
     *
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \Swagger\Client\Model\CustomAttributeData[]
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \Swagger\Client\Model\CustomAttributeData[] $custom_attributes custom_attributes
     *
     * @return $this
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets is_collectible
     *
     * @return bool
     */
    public function getIsCollectible()
    {
        return $this->container['is_collectible'];
    }

    /**
     * Sets is_collectible
     *
     * @param bool $is_collectible is_collectible
     *
     * @return $this
     */
    public function setIsCollectible($is_collectible)
    {
        $this->container['is_collectible'] = $is_collectible;

        return $this;
    }

    /**
     * Gets metadata_token
     *
     * @return int
     */
    public function getMetadataToken()
    {
        return $this->container['metadata_token'];
    }

    /**
     * Sets metadata_token
     *
     * @param int $metadata_token metadata_token
     *
     * @return $this
     */
    public function setMetadataToken($metadata_token)
    {
        $this->container['metadata_token'] = $metadata_token;

        return $this;
    }

    /**
     * Gets member_type
     *
     * @return \Swagger\Client\Model\MemberTypes
     */
    public function getMemberType()
    {
        return $this->container['member_type'];
    }

    /**
     * Sets member_type
     *
     * @param \Swagger\Client\Model\MemberTypes $member_type member_type
     *
     * @return $this
     */
    public function setMemberType($member_type)
    {
        $this->container['member_type'] = $member_type;

        return $this;
    }

    /**
     * Gets property_type
     *
     * @return \Swagger\Client\Model\Type
     */
    public function getPropertyType()
    {
        return $this->container['property_type'];
    }

    /**
     * Sets property_type
     *
     * @param \Swagger\Client\Model\Type $property_type property_type
     *
     * @return $this
     */
    public function setPropertyType($property_type)
    {
        $this->container['property_type'] = $property_type;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Swagger\Client\Model\PropertyAttributes
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Swagger\Client\Model\PropertyAttributes $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets is_special_name
     *
     * @return bool
     */
    public function getIsSpecialName()
    {
        return $this->container['is_special_name'];
    }

    /**
     * Sets is_special_name
     *
     * @param bool $is_special_name is_special_name
     *
     * @return $this
     */
    public function setIsSpecialName($is_special_name)
    {
        $this->container['is_special_name'] = $is_special_name;

        return $this;
    }

    /**
     * Gets can_read
     *
     * @return bool
     */
    public function getCanRead()
    {
        return $this->container['can_read'];
    }

    /**
     * Sets can_read
     *
     * @param bool $can_read can_read
     *
     * @return $this
     */
    public function setCanRead($can_read)
    {
        $this->container['can_read'] = $can_read;

        return $this;
    }

    /**
     * Gets can_write
     *
     * @return bool
     */
    public function getCanWrite()
    {
        return $this->container['can_write'];
    }

    /**
     * Sets can_write
     *
     * @param bool $can_write can_write
     *
     * @return $this
     */
    public function setCanWrite($can_write)
    {
        $this->container['can_write'] = $can_write;

        return $this;
    }

    /**
     * Gets get_method
     *
     * @return \Swagger\Client\Model\MethodInfo
     */
    public function getGetMethod()
    {
        return $this->container['get_method'];
    }

    /**
     * Sets get_method
     *
     * @param \Swagger\Client\Model\MethodInfo $get_method get_method
     *
     * @return $this
     */
    public function setGetMethod($get_method)
    {
        $this->container['get_method'] = $get_method;

        return $this;
    }

    /**
     * Gets set_method
     *
     * @return \Swagger\Client\Model\MethodInfo
     */
    public function getSetMethod()
    {
        return $this->container['set_method'];
    }

    /**
     * Sets set_method
     *
     * @param \Swagger\Client\Model\MethodInfo $set_method set_method
     *
     * @return $this
     */
    public function setSetMethod($set_method)
    {
        $this->container['set_method'] = $set_method;

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