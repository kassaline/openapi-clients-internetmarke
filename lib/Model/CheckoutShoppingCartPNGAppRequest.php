<?php
/**
 * CheckoutShoppingCartPNGAppRequest
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
 * CheckoutShoppingCartPNGAppRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Internetmarke
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutShoppingCartPNGAppRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'checkoutShoppingCartPNGApp_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'productCode' => 'int',
        'imageID' => 'int',
        'voucherLayout' => 'string',
        'dpi' => 'string',
        'optimizePNG' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'productCode' => 'int32',
        'imageID' => 'int32',
        'voucherLayout' => null,
        'dpi' => null,
        'optimizePNG' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
		'productCode' => false,
		'imageID' => false,
		'voucherLayout' => false,
		'dpi' => false,
		'optimizePNG' => false
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
        'type' => 'type',
        'productCode' => 'productCode',
        'imageID' => 'imageID',
        'voucherLayout' => 'voucherLayout',
        'dpi' => 'dpi',
        'optimizePNG' => 'optimizePNG'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'productCode' => 'setProductCode',
        'imageID' => 'setImageID',
        'voucherLayout' => 'setVoucherLayout',
        'dpi' => 'setDpi',
        'optimizePNG' => 'setOptimizePNG'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'productCode' => 'getProductCode',
        'imageID' => 'getImageID',
        'voucherLayout' => 'getVoucherLayout',
        'dpi' => 'getDpi',
        'optimizePNG' => 'getOptimizePNG'
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

    public const TYPE_APP_SHOPPING_CART_PNG_REQUEST = 'AppShoppingCartPNGRequest';
    public const TYPE_APP_SHOPPING_CART_PREVIEW_PNG_REQUEST = 'AppShoppingCartPreviewPNGRequest';
    public const VOUCHER_LAYOUT_ADDRESS_ZONE = 'ADDRESS_ZONE';
    public const VOUCHER_LAYOUT_FRANKING_ZONE = 'FRANKING_ZONE';
    public const DPI_DPI300 = 'DPI300';
    public const DPI_DPI203 = 'DPI203';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_APP_SHOPPING_CART_PNG_REQUEST,
            self::TYPE_APP_SHOPPING_CART_PREVIEW_PNG_REQUEST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoucherLayoutAllowableValues()
    {
        return [
            self::VOUCHER_LAYOUT_ADDRESS_ZONE,
            self::VOUCHER_LAYOUT_FRANKING_ZONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDpiAllowableValues()
    {
        return [
            self::DPI_DPI300,
            self::DPI_DPI203,
        ];
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
        $this->setIfExists('type', $data ?? [], 'AppShoppingCartPNGRequest');
        $this->setIfExists('productCode', $data ?? [], null);
        $this->setIfExists('imageID', $data ?? [], null);
        $this->setIfExists('voucherLayout', $data ?? [], null);
        $this->setIfExists('dpi', $data ?? [], null);
        $this->setIfExists('optimizePNG', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['productCode']) && ($this->container['productCode'] < 1)) {
            $invalidProperties[] = "invalid value for 'productCode', must be bigger than or equal to 1.";
        }

        if ($this->container['voucherLayout'] === null) {
            $invalidProperties[] = "'voucherLayout' can't be null";
        }
        $allowedValues = $this->getVoucherLayoutAllowableValues();
        if (!is_null($this->container['voucherLayout']) && !in_array($this->container['voucherLayout'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'voucherLayout', must be one of '%s'",
                $this->container['voucherLayout'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDpiAllowableValues();
        if (!is_null($this->container['dpi']) && !in_array($this->container['dpi'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dpi', must be one of '%s'",
                $this->container['dpi'],
                implode("', '", $allowedValues)
            );
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type set AppShoppingCartPNGRequest if validate=false, AppShoppingCartPreviewPNGRequest if validate=true
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return int|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param int|null $productCode The product code for the selected product, e.g. standard letter, maxi letter etc. The product code must be greater than 0 and the product must be available in the third-party application.
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        if (is_null($productCode)) {
            throw new \InvalidArgumentException('non-nullable productCode cannot be null');
        }

        if (($productCode < 1)) {
            throw new \InvalidArgumentException('invalid value for $productCode when calling CheckoutShoppingCartPNGAppRequest., must be bigger than or equal to 1.');
        }

        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets imageID
     *
     * @return int|null
     */
    public function getImageID()
    {
        return $this->container['imageID'];
    }

    /**
     * Sets imageID
     *
     * @param int|null $imageID The ID of the motif.
     *
     * @return self
     */
    public function setImageID($imageID)
    {
        if (is_null($imageID)) {
            throw new \InvalidArgumentException('non-nullable imageID cannot be null');
        }
        $this->container['imageID'] = $imageID;

        return $this;
    }

    /**
     * Gets voucherLayout
     *
     * @return string
     */
    public function getVoucherLayout()
    {
        return $this->container['voucherLayout'];
    }

    /**
     * Sets voucherLayout
     *
     * @param string $voucherLayout voucherLayout
     *
     * @return self
     */
    public function setVoucherLayout($voucherLayout)
    {
        if (is_null($voucherLayout)) {
            throw new \InvalidArgumentException('non-nullable voucherLayout cannot be null');
        }
        $allowedValues = $this->getVoucherLayoutAllowableValues();
        if (!in_array($voucherLayout, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'voucherLayout', must be one of '%s'",
                    $voucherLayout,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voucherLayout'] = $voucherLayout;

        return $this;
    }

    /**
     * Gets dpi
     *
     * @return string|null
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi
     *
     * @param string|null $dpi dpi
     *
     * @return self
     */
    public function setDpi($dpi)
    {
        if (is_null($dpi)) {
            throw new \InvalidArgumentException('non-nullable dpi cannot be null');
        }
        $allowedValues = $this->getDpiAllowableValues();
        if (!in_array($dpi, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dpi', must be one of '%s'",
                    $dpi,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dpi'] = $dpi;

        return $this;
    }

    /**
     * Gets optimizePNG
     *
     * @return bool|null
     */
    public function getOptimizePNG()
    {
        return $this->container['optimizePNG'];
    }

    /**
     * Sets optimizePNG
     *
     * @param bool|null $optimizePNG Flag to optimize the PNG.
     *
     * @return self
     */
    public function setOptimizePNG($optimizePNG)
    {
        if (is_null($optimizePNG)) {
            throw new \InvalidArgumentException('non-nullable optimizePNG cannot be null');
        }
        $this->container['optimizePNG'] = $optimizePNG;

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


