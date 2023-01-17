<?php
/**
 * PublishedExceptionErrorCode
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
use \Swagger\Client\ObjectSerializer;

/**
 * PublishedExceptionErrorCode Class Doc Comment
 *
 * @category Class
 * @description Error codes for BadRequests and Internal errors. Add prefix for new value.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublishedExceptionErrorCode
{
    /**
     * Possible values of this enum
     */
    const UNDEFINED = 'undefined';
const SETUP_PAYMENT_SETTINGS_NOT_FOUND = 'setupPaymentSettingsNotFound';
const SETUP_PAYMENT_TYPE_NOT_ENABLED = 'setupPaymentTypeNotEnabled';
const SETUP_CURRENCY_NOT_SET = 'setupCurrencyNotSet';
const SETUP_MERCHANT_INFO_NOT_SET = 'setupMerchantInfoNotSet';
const MOBILE_SMS_SENDER_ARGUMENT_ERROR = 'mobileSmsSenderArgumentError';
const MOBILE_SMS_ERROR = 'mobileSmsError';
const MOBILE_NUMBER_PARSE_ERROR = 'mobileNumberParseError';
const PDF_GENERATOR_ERROR = 'pdfGeneratorError';
const PDF_VISDOC_URL_NOT_VALID = 'pdfVisdocUrlNotValid';
const RESERVATION_NOT_AVAILABLE_OR_PERIOD_NOT_VALID_FOR_RESERVATION = 'reservationNotAvailableOrPeriodNotValidForReservation';
const RESERVATION_EXPIRED = 'reservationExpired';
const RESERVATION_DATA_NOT_VALID = 'reservationDataNotValid';
const RESERVATION_REMOVE_ERROR = 'reservationRemoveError';
const WEB_ENTITY_NOT_VALID = 'webEntityNotValid';
const WEB_ENTITY_API_ACCESS_DISABLED = 'webEntityApiAccessDisabled';
const REQUEST_PATH_NOT_VALID = 'requestPathNotValid';
const HTTP_CLIENT_ERROR = 'httpClientError';
const PAYMENT_REGISTRATION_ERROR = 'paymentRegistrationError';
const PAYMENT_INFO_EXPIRED = 'paymentInfoExpired';
const ORDER_SAVE_ERROR = 'orderSaveError';
const ORDER_PAY_ERROR = 'orderPayError';
const WEB_PRODUCTS_EMPTY_LIST = 'webProductsEmptyList';
const WEB_PRODUCT_NOT_FOUND = 'webProductNotFound';
const NET_AXEPT_QUERY_ERROR = 'netAxeptQueryError';
const NET_AXEPT_ANNUL_ERROR = 'netAxeptAnnulError';
const NET_AXEPT_CAPTURE_ERROR = 'netAxeptCaptureError';
const CHECKOUT_TERMS_NOT_ACCEPTED = 'checkoutTermsNotAccepted';
const CHECKOUT_EMAIL_OR_MOBILE_NOT_CONFIRMED = 'checkoutEmailOrMobileNotConfirmed';
const CHECKOUT_SUCCESS_OR_ERROR_URL_NOT_VALID = 'checkoutSuccessOrErrorUrlNotValid';
const CHECKOUT_RESERVATION_LIST_EMPTY = 'checkoutReservationListEmpty';
const CHECKOUT_AMOUNT_NOT_CORRECT = 'checkoutAmountNotCorrect';
const CHECKOUT_GIFTCARDS_DUPLICATED = 'checkoutGiftcardsDuplicated';
const CHECKOUT_GIFTCARDS_ZERO_BALANCE = 'checkoutGiftcardsZeroBalance';
const CHECKOUT_GIFTCARDS_NOT_VALID = 'checkoutGiftcardsNotValid';
const USER_INPUT_DATE_NOT_VALID = 'userInputDateNotValid';
const USER_INPUT_NUMBER_OF_PEOPLE_NOT_VALID = 'userInputNumberOfPeopleNotValid';
const USER_INPUT_GUEST_AGES_EXCEED_NUMBER_OF_PEOPLE = 'userInputGuestAgesExceedNumberOfPeople';
const INPUT_NOT_VALID = 'inputNotValid';
const CUSTOMER_EMAIL_NOT_FOUND = 'customerEmailNotFound';
const ORIGIN_OR_REFERRER_ERROR = 'originOrReferrerError';
const ORDER_GROUP_CANCELLATION_SETTINGS_NOT_ENABLED = 'orderGroupCancellationSettingsNotEnabled';
const ORDER_GROUP_HAS_INVOICES = 'orderGroupHasInvoices';
const ORDER_GROUP_REFUND_ERROR = 'orderGroupRefundError';
const UNAUTHORIZED_ERROR = 'unauthorizedError';
const ENCRYPTED_VALUE_NOT_VALID = 'encryptedValueNotValid';
const UNHANDLED_ERROR = 'unhandledError';
const CUSTOMER_EMAIL_IS_NOT_VALID = 'customerEmailIsNotValid';
const VALUE_NULL_ERROR = 'valueNullError';
const WRONG_CUSTOMER_DATA = 'wrongCustomerData';
const NOT_VALID_ORDER_STATUS = 'notValidOrderStatus';
const ORDER_NOT_FOUND = 'orderNotFound';
const TOKEN_NOT_PROVIDED = 'tokenNotProvided';
const ORDER_ALREADY_BEING_PROCESSED = 'orderAlreadyBeingProcessed';
const WRONG_COUNTRY_CODE = 'wrongCountryCode';
const JSON_IS_NOT_VALID = 'jsonIsNotValid';
const WRONG_DB_SETUP = 'wrongDbSetup';
const GIFTCARD_PAYMENT_REFUND_ERROR = 'giftcardPaymentRefundError';
const PAYMENT_GATEWAY_ERROR = 'paymentGatewayError';
const SMS_SENDING_BLOCKED = 'smsSendingBlocked';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNDEFINED,
self::SETUP_PAYMENT_SETTINGS_NOT_FOUND,
self::SETUP_PAYMENT_TYPE_NOT_ENABLED,
self::SETUP_CURRENCY_NOT_SET,
self::SETUP_MERCHANT_INFO_NOT_SET,
self::MOBILE_SMS_SENDER_ARGUMENT_ERROR,
self::MOBILE_SMS_ERROR,
self::MOBILE_NUMBER_PARSE_ERROR,
self::PDF_GENERATOR_ERROR,
self::PDF_VISDOC_URL_NOT_VALID,
self::RESERVATION_NOT_AVAILABLE_OR_PERIOD_NOT_VALID_FOR_RESERVATION,
self::RESERVATION_EXPIRED,
self::RESERVATION_DATA_NOT_VALID,
self::RESERVATION_REMOVE_ERROR,
self::WEB_ENTITY_NOT_VALID,
self::WEB_ENTITY_API_ACCESS_DISABLED,
self::REQUEST_PATH_NOT_VALID,
self::HTTP_CLIENT_ERROR,
self::PAYMENT_REGISTRATION_ERROR,
self::PAYMENT_INFO_EXPIRED,
self::ORDER_SAVE_ERROR,
self::ORDER_PAY_ERROR,
self::WEB_PRODUCTS_EMPTY_LIST,
self::WEB_PRODUCT_NOT_FOUND,
self::NET_AXEPT_QUERY_ERROR,
self::NET_AXEPT_ANNUL_ERROR,
self::NET_AXEPT_CAPTURE_ERROR,
self::CHECKOUT_TERMS_NOT_ACCEPTED,
self::CHECKOUT_EMAIL_OR_MOBILE_NOT_CONFIRMED,
self::CHECKOUT_SUCCESS_OR_ERROR_URL_NOT_VALID,
self::CHECKOUT_RESERVATION_LIST_EMPTY,
self::CHECKOUT_AMOUNT_NOT_CORRECT,
self::CHECKOUT_GIFTCARDS_DUPLICATED,
self::CHECKOUT_GIFTCARDS_ZERO_BALANCE,
self::CHECKOUT_GIFTCARDS_NOT_VALID,
self::USER_INPUT_DATE_NOT_VALID,
self::USER_INPUT_NUMBER_OF_PEOPLE_NOT_VALID,
self::USER_INPUT_GUEST_AGES_EXCEED_NUMBER_OF_PEOPLE,
self::INPUT_NOT_VALID,
self::CUSTOMER_EMAIL_NOT_FOUND,
self::ORIGIN_OR_REFERRER_ERROR,
self::ORDER_GROUP_CANCELLATION_SETTINGS_NOT_ENABLED,
self::ORDER_GROUP_HAS_INVOICES,
self::ORDER_GROUP_REFUND_ERROR,
self::UNAUTHORIZED_ERROR,
self::ENCRYPTED_VALUE_NOT_VALID,
self::UNHANDLED_ERROR,
self::CUSTOMER_EMAIL_IS_NOT_VALID,
self::VALUE_NULL_ERROR,
self::WRONG_CUSTOMER_DATA,
self::NOT_VALID_ORDER_STATUS,
self::ORDER_NOT_FOUND,
self::TOKEN_NOT_PROVIDED,
self::ORDER_ALREADY_BEING_PROCESSED,
self::WRONG_COUNTRY_CODE,
self::JSON_IS_NOT_VALID,
self::WRONG_DB_SETUP,
self::GIFTCARD_PAYMENT_REFUND_ERROR,
self::PAYMENT_GATEWAY_ERROR,
self::SMS_SENDING_BLOCKED,        ];
    }
}
