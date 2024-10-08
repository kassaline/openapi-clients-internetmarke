<?php
/**
 * RetoureState
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
 * The version of the OpenAPI document: 1.25
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
 * RetoureState Class Doc Comment
 *
 * @category Class
 * @description The representation of the status for already submitted refund.
 * @package  OpenAPI\Client\Internetmarke
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RetoureState implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetoureState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'retoureTransactionId' => 'int',
        'shopRetoureId' => 'string',
        'totalCount' => 'int',
        'countStillOpen' => 'int',
        'retourePrice' => 'int',
        'creationDate' => 'string',
        'serialnumber' => 'string',
        'refundedVouchers' => '\OpenAPI\Client\Internetmarke\Model\Voucher[]',
        'notRefundedVouchers' => '\OpenAPI\Client\Internetmarke\Model\Voucher[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'retoureTransactionId' => 'int32',
        'shopRetoureId' => null,
        'totalCount' => 'int32',
        'countStillOpen' => 'int32',
        'retourePrice' => 'int32',
        'creationDate' => null,
        'serialnumber' => null,
        'refundedVouchers' => null,
        'notRefundedVouchers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'retoureTransactionId' => false,
		'shopRetoureId' => false,
		'totalCount' => false,
		'countStillOpen' => false,
		'retourePrice' => false,
		'creationDate' => false,
		'serialnumber' => false,
		'refundedVouchers' => false,
		'notRefundedVouchers' => false
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
        'retoureTransactionId' => 'retoureTransactionId',
        'shopRetoureId' => 'shopRetoureId',
        'totalCount' => 'totalCount',
        'countStillOpen' => 'countStillOpen',
        'retourePrice' => 'retourePrice',
        'creationDate' => 'creationDate',
        'serialnumber' => 'serialnumber',
        'refundedVouchers' => 'refundedVouchers',
        'notRefundedVouchers' => 'notRefundedVouchers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'retoureTransactionId' => 'setRetoureTransactionId',
        'shopRetoureId' => 'setShopRetoureId',
        'totalCount' => 'setTotalCount',
        'countStillOpen' => 'setCountStillOpen',
        'retourePrice' => 'setRetourePrice',
        'creationDate' => 'setCreationDate',
        'serialnumber' => 'setSerialnumber',
        'refundedVouchers' => 'setRefundedVouchers',
        'notRefundedVouchers' => 'setNotRefundedVouchers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retoureTransactionId' => 'getRetoureTransactionId',
        'shopRetoureId' => 'getShopRetoureId',
        'totalCount' => 'getTotalCount',
        'countStillOpen' => 'getCountStillOpen',
        'retourePrice' => 'getRetourePrice',
        'creationDate' => 'getCreationDate',
        'serialnumber' => 'getSerialnumber',
        'refundedVouchers' => 'getRefundedVouchers',
        'notRefundedVouchers' => 'getNotRefundedVouchers'
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
        $this->setIfExists('retoureTransactionId', $data ?? [], null);
        $this->setIfExists('shopRetoureId', $data ?? [], null);
        $this->setIfExists('totalCount', $data ?? [], null);
        $this->setIfExists('countStillOpen', $data ?? [], null);
        $this->setIfExists('retourePrice', $data ?? [], null);
        $this->setIfExists('creationDate', $data ?? [], null);
        $this->setIfExists('serialnumber', $data ?? [], null);
        $this->setIfExists('refundedVouchers', $data ?? [], null);
        $this->setIfExists('notRefundedVouchers', $data ?? [], null);
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

        if ($this->container['shopRetoureId'] === null) {
            $invalidProperties[] = "'shopRetoureId' can't be null";
        }
        if ($this->container['creationDate'] === null) {
            $invalidProperties[] = "'creationDate' can't be null";
        }
        if ($this->container['serialnumber'] === null) {
            $invalidProperties[] = "'serialnumber' can't be null";
        }
        if (!preg_match("/^\\S{10}$/", $this->container['serialnumber'])) {
            $invalidProperties[] = "invalid value for 'serialnumber', must be conform to the pattern /^\\S{10}$/.";
        }

        if ($this->container['refundedVouchers'] === null) {
            $invalidProperties[] = "'refundedVouchers' can't be null";
        }
        if ((count($this->container['refundedVouchers']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'refundedVouchers', number of items must be less than or equal to 2147483647.";
        }

        if ((count($this->container['refundedVouchers']) < 1)) {
            $invalidProperties[] = "invalid value for 'refundedVouchers', number of items must be greater than or equal to 1.";
        }

        if ($this->container['notRefundedVouchers'] === null) {
            $invalidProperties[] = "'notRefundedVouchers' can't be null";
        }
        if ((count($this->container['notRefundedVouchers']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'notRefundedVouchers', number of items must be less than or equal to 2147483647.";
        }

        if ((count($this->container['notRefundedVouchers']) < 1)) {
            $invalidProperties[] = "invalid value for 'notRefundedVouchers', number of items must be greater than or equal to 1.";
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
     * Gets retoureTransactionId
     *
     * @return int|null
     */
    public function getRetoureTransactionId()
    {
        return $this->container['retoureTransactionId'];
    }

    /**
     * Sets retoureTransactionId
     *
     * @param int|null $retoureTransactionId The transaction number for the refund.
     *
     * @return self
     */
    public function setRetoureTransactionId($retoureTransactionId)
    {
        if (is_null($retoureTransactionId)) {
            throw new \InvalidArgumentException('non-nullable retoureTransactionId cannot be null');
        }
        $this->container['retoureTransactionId'] = $retoureTransactionId;

        return $this;
    }

    /**
     * Gets shopRetoureId
     *
     * @return string
     */
    public function getShopRetoureId()
    {
        return $this->container['shopRetoureId'];
    }

    /**
     * Sets shopRetoureId
     *
     * @param string $shopRetoureId The id to be assigned by the shop for the refund.
     *
     * @return self
     */
    public function setShopRetoureId($shopRetoureId)
    {
        if (is_null($shopRetoureId)) {
            throw new \InvalidArgumentException('non-nullable shopRetoureId cannot be null');
        }
        $this->container['shopRetoureId'] = $shopRetoureId;

        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount The number of stamps processed with this refund transaction.
     *
     * @return self
     */
    public function setTotalCount($totalCount)
    {
        if (is_null($totalCount)) {
            throw new \InvalidArgumentException('non-nullable totalCount cannot be null');
        }
        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets countStillOpen
     *
     * @return int|null
     */
    public function getCountStillOpen()
    {
        return $this->container['countStillOpen'];
    }

    /**
     * Sets countStillOpen
     *
     * @param int|null $countStillOpen The number of stamps not yet processed. ZINS feedback has not arrived here yet.
     *
     * @return self
     */
    public function setCountStillOpen($countStillOpen)
    {
        if (is_null($countStillOpen)) {
            throw new \InvalidArgumentException('non-nullable countStillOpen cannot be null');
        }
        $this->container['countStillOpen'] = $countStillOpen;

        return $this;
    }

    /**
     * Gets retourePrice
     *
     * @return int|null
     */
    public function getRetourePrice()
    {
        return $this->container['retourePrice'];
    }

    /**
     * Sets retourePrice
     *
     * @param int|null $retourePrice The total value of confirmed refunds.
     *
     * @return self
     */
    public function setRetourePrice($retourePrice)
    {
        if (is_null($retourePrice)) {
            throw new \InvalidArgumentException('non-nullable retourePrice cannot be null');
        }
        $this->container['retourePrice'] = $retourePrice;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param string $creationDate The timestamp when the refund was created.
     *
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        if (is_null($creationDate)) {
            throw new \InvalidArgumentException('non-nullable creationDate cannot be null');
        }
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets serialnumber
     *
     * @return string
     */
    public function getSerialnumber()
    {
        return $this->container['serialnumber'];
    }

    /**
     * Sets serialnumber
     *
     * @param string $serialnumber The serial number of the Safebox (FrankierAccountId).
     *
     * @return self
     */
    public function setSerialnumber($serialnumber)
    {
        if (is_null($serialnumber)) {
            throw new \InvalidArgumentException('non-nullable serialnumber cannot be null');
        }

        if ((!preg_match("/^\\S{10}$/", ObjectSerializer::toString($serialnumber)))) {
            throw new \InvalidArgumentException("invalid value for \$serialnumber when calling RetoureState., must conform to the pattern /^\\S{10}$/.");
        }

        $this->container['serialnumber'] = $serialnumber;

        return $this;
    }

    /**
     * Gets refundedVouchers
     *
     * @return \OpenAPI\Client\Internetmarke\Model\Voucher[]
     */
    public function getRefundedVouchers()
    {
        return $this->container['refundedVouchers'];
    }

    /**
     * Sets refundedVouchers
     *
     * @param \OpenAPI\Client\Internetmarke\Model\Voucher[] $refundedVouchers The list of created franking IDs.
     *
     * @return self
     */
    public function setRefundedVouchers($refundedVouchers)
    {
        if (is_null($refundedVouchers)) {
            throw new \InvalidArgumentException('non-nullable refundedVouchers cannot be null');
        }

        if ((count($refundedVouchers) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $refundedVouchers when calling RetoureState., number of items must be less than or equal to 2147483647.');
        }
        if ((count($refundedVouchers) < 1)) {
            throw new \InvalidArgumentException('invalid length for $refundedVouchers when calling RetoureState., number of items must be greater than or equal to 1.');
        }
        $this->container['refundedVouchers'] = $refundedVouchers;

        return $this;
    }

    /**
     * Gets notRefundedVouchers
     *
     * @return \OpenAPI\Client\Internetmarke\Model\Voucher[]
     */
    public function getNotRefundedVouchers()
    {
        return $this->container['notRefundedVouchers'];
    }

    /**
     * Sets notRefundedVouchers
     *
     * @param \OpenAPI\Client\Internetmarke\Model\Voucher[] $notRefundedVouchers The list of created franking IDs.
     *
     * @return self
     */
    public function setNotRefundedVouchers($notRefundedVouchers)
    {
        if (is_null($notRefundedVouchers)) {
            throw new \InvalidArgumentException('non-nullable notRefundedVouchers cannot be null');
        }

        if ((count($notRefundedVouchers) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $notRefundedVouchers when calling RetoureState., number of items must be less than or equal to 2147483647.');
        }
        if ((count($notRefundedVouchers) < 1)) {
            throw new \InvalidArgumentException('invalid length for $notRefundedVouchers when calling RetoureState., number of items must be greater than or equal to 1.');
        }
        $this->container['notRefundedVouchers'] = $notRefundedVouchers;

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


