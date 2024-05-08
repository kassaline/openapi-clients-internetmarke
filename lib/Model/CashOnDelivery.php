<?php
/**
 * CashOnDelivery
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Internetmarke
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deutsche Post INTERNETMARKE API
 *
 * Division: Post & Parcel Germany<br /> The INTERNETMARKE is the online-postage for mail products of Deutsche Post AG.
 *
 * The version of the OpenAPI document: 1.23
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Internetmarke\Model;

use \ArrayAccess;
use \OpenAPI\Client\Internetmarke\ObjectSerializer;

/**
 * CashOnDelivery Class Doc Comment
 *
 * @category Class
 * @description The details for cash on delivery. Required only for cash on delivery products.
 * @package  OpenAPI\Client\Internetmarke
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashOnDelivery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashOnDelivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paymentRecipient' => 'string',
        'paymentReference' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'accountOwner' => 'string',
        'amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'paymentRecipient' => null,
        'paymentReference' => null,
        'iban' => null,
        'bic' => null,
        'accountOwner' => null,
        'amount' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'paymentRecipient' => false,
		'paymentReference' => false,
		'iban' => false,
		'bic' => false,
		'accountOwner' => false,
		'amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'paymentRecipient' => 'paymentRecipient',
        'paymentReference' => 'paymentReference',
        'iban' => 'iban',
        'bic' => 'bic',
        'accountOwner' => 'accountOwner',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paymentRecipient' => 'setPaymentRecipient',
        'paymentReference' => 'setPaymentReference',
        'iban' => 'setIban',
        'bic' => 'setBic',
        'accountOwner' => 'setAccountOwner',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paymentRecipient' => 'getPaymentRecipient',
        'paymentReference' => 'getPaymentReference',
        'iban' => 'getIban',
        'bic' => 'getBic',
        'accountOwner' => 'getAccountOwner',
        'amount' => 'getAmount'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('paymentRecipient', $data ?? [], null);
        $this->setIfExists('paymentReference', $data ?? [], null);
        $this->setIfExists('iban', $data ?? [], null);
        $this->setIfExists('bic', $data ?? [], null);
        $this->setIfExists('accountOwner', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['paymentRecipient'] === null) {
            $invalidProperties[] = "'paymentRecipient' can't be null";
        }
        if ((mb_strlen($this->container['paymentRecipient']) > 54)) {
            $invalidProperties[] = "invalid value for 'paymentRecipient', the character length must be smaller than or equal to 54.";
        }

        if ((mb_strlen($this->container['paymentRecipient']) < 1)) {
            $invalidProperties[] = "invalid value for 'paymentRecipient', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['paymentReference'] === null) {
            $invalidProperties[] = "'paymentReference' can't be null";
        }
        if ((mb_strlen($this->container['paymentReference']) > 140)) {
            $invalidProperties[] = "invalid value for 'paymentReference', the character length must be smaller than or equal to 140.";
        }

        if ((mb_strlen($this->container['paymentReference']) < 0)) {
            $invalidProperties[] = "invalid value for 'paymentReference', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['iban'] === null) {
            $invalidProperties[] = "'iban' can't be null";
        }
        if ((mb_strlen($this->container['iban']) > 34)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be smaller than or equal to 34.";
        }

        if ((mb_strlen($this->container['iban']) < 15)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be bigger than or equal to 15.";
        }

        if (!preg_match("/^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{11,30}$/", $this->container['iban'])) {
            $invalidProperties[] = "invalid value for 'iban', must be conform to the pattern /^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{11,30}$/.";
        }

        if ($this->container['bic'] === null) {
            $invalidProperties[] = "'bic' can't be null";
        }
        if ((mb_strlen($this->container['bic']) > 11)) {
            $invalidProperties[] = "invalid value for 'bic', the character length must be smaller than or equal to 11.";
        }

        if ((mb_strlen($this->container['bic']) < 8)) {
            $invalidProperties[] = "invalid value for 'bic', the character length must be bigger than or equal to 8.";
        }

        if (!preg_match("/^[a-zA-Z]{4}[A-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?$/", $this->container['bic'])) {
            $invalidProperties[] = "invalid value for 'bic', must be conform to the pattern /^[a-zA-Z]{4}[A-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?$/.";
        }

        if ($this->container['accountOwner'] === null) {
            $invalidProperties[] = "'accountOwner' can't be null";
        }
        if ((mb_strlen($this->container['accountOwner']) > 54)) {
            $invalidProperties[] = "invalid value for 'accountOwner', the character length must be smaller than or equal to 54.";
        }

        if ((mb_strlen($this->container['accountOwner']) < 1)) {
            $invalidProperties[] = "invalid value for 'accountOwner', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 160000)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 160000.";
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
     * Gets paymentRecipient
     *
     * @return string
     */
    public function getPaymentRecipient()
    {
        return $this->container['paymentRecipient'];
    }

    /**
     * Sets paymentRecipient
     *
     * @param string $paymentRecipient The recipient of the payment. All characters are allowed except <, &.
     *
     * @return self
     */
    public function setPaymentRecipient($paymentRecipient)
    {
        if (is_null($paymentRecipient)) {
            throw new \InvalidArgumentException('non-nullable paymentRecipient cannot be null');
        }
        if ((mb_strlen($paymentRecipient) > 54)) {
            throw new \InvalidArgumentException('invalid length for $paymentRecipient when calling CashOnDelivery., must be smaller than or equal to 54.');
        }
        if ((mb_strlen($paymentRecipient) < 1)) {
            throw new \InvalidArgumentException('invalid length for $paymentRecipient when calling CashOnDelivery., must be bigger than or equal to 1.');
        }

        $this->container['paymentRecipient'] = $paymentRecipient;

        return $this;
    }

    /**
     * Gets paymentReference
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->container['paymentReference'];
    }

    /**
     * Sets paymentReference
     *
     * @param string $paymentReference The payment reference. All characters are allowed except <, &.
     *
     * @return self
     */
    public function setPaymentReference($paymentReference)
    {
        if (is_null($paymentReference)) {
            throw new \InvalidArgumentException('non-nullable paymentReference cannot be null');
        }
        if ((mb_strlen($paymentReference) > 140)) {
            throw new \InvalidArgumentException('invalid length for $paymentReference when calling CashOnDelivery., must be smaller than or equal to 140.');
        }
        if ((mb_strlen($paymentReference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $paymentReference when calling CashOnDelivery., must be bigger than or equal to 0.');
        }

        $this->container['paymentReference'] = $paymentReference;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban The IBAN of the payment receiver with international syntax and without spaces
     *
     * @return self
     */
    public function setIban($iban)
    {
        if (is_null($iban)) {
            throw new \InvalidArgumentException('non-nullable iban cannot be null');
        }
        if ((mb_strlen($iban) > 34)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling CashOnDelivery., must be smaller than or equal to 34.');
        }
        if ((mb_strlen($iban) < 15)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling CashOnDelivery., must be bigger than or equal to 15.');
        }
        if ((!preg_match("/^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{11,30}$/", ObjectSerializer::toString($iban)))) {
            throw new \InvalidArgumentException("invalid value for \$iban when calling CashOnDelivery., must conform to the pattern /^[a-zA-Z]{2}[0-9]{2}[0-9a-zA-Z]{11,30}$/.");
        }

        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic The BIC of the payment receiver with international syntax and without spaces
     *
     * @return self
     */
    public function setBic($bic)
    {
        if (is_null($bic)) {
            throw new \InvalidArgumentException('non-nullable bic cannot be null');
        }
        if ((mb_strlen($bic) > 11)) {
            throw new \InvalidArgumentException('invalid length for $bic when calling CashOnDelivery., must be smaller than or equal to 11.');
        }
        if ((mb_strlen($bic) < 8)) {
            throw new \InvalidArgumentException('invalid length for $bic when calling CashOnDelivery., must be bigger than or equal to 8.');
        }
        if ((!preg_match("/^[a-zA-Z]{4}[A-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?$/", ObjectSerializer::toString($bic)))) {
            throw new \InvalidArgumentException("invalid value for \$bic when calling CashOnDelivery., must conform to the pattern /^[a-zA-Z]{4}[A-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?$/.");
        }

        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets accountOwner
     *
     * @return string
     */
    public function getAccountOwner()
    {
        return $this->container['accountOwner'];
    }

    /**
     * Sets accountOwner
     *
     * @param string $accountOwner Target account owner.
     *
     * @return self
     */
    public function setAccountOwner($accountOwner)
    {
        if (is_null($accountOwner)) {
            throw new \InvalidArgumentException('non-nullable accountOwner cannot be null');
        }
        if ((mb_strlen($accountOwner) > 54)) {
            throw new \InvalidArgumentException('invalid length for $accountOwner when calling CashOnDelivery., must be smaller than or equal to 54.');
        }
        if ((mb_strlen($accountOwner) < 1)) {
            throw new \InvalidArgumentException('invalid length for $accountOwner when calling CashOnDelivery., must be bigger than or equal to 1.');
        }

        $this->container['accountOwner'] = $accountOwner;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Cash on delivery amount in euro cents.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount > 160000)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CashOnDelivery., must be smaller than or equal to 160000.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


