<?php
/**
 * AppShoppingCartPNGRequest
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
use \OpenAPI\Client\Internetmarke\ObjectSerializer;

/**
 * AppShoppingCartPNGRequest Class Doc Comment
 *
 * @category Class
 * @description The request object for external partners to buy an internet stamp in PNG format.
 * @package  OpenAPI\Client\Internetmarke
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AppShoppingCartPNGRequest extends AppCheckoutPNGRequest
{
    public const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppShoppingCartPNGRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shopOrderId' => 'string',
        'ppl' => 'int',
        'total' => 'int',
        'createManifest' => 'bool',
        'createShippingList' => 'string',
        'dpi' => 'string',
        'optimizePNG' => 'bool',
        'positions' => '\OpenAPI\Client\Internetmarke\Model\AppShoppingCartPosition[]',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shopOrderId' => null,
        'ppl' => 'int32',
        'total' => 'int32',
        'createManifest' => null,
        'createShippingList' => null,
        'dpi' => null,
        'optimizePNG' => null,
        'positions' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shopOrderId' => false,
		'ppl' => false,
		'total' => false,
		'createManifest' => false,
		'createShippingList' => false,
		'dpi' => false,
		'optimizePNG' => false,
		'positions' => false,
		'type' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'shopOrderId' => 'shopOrderId',
        'ppl' => 'ppl',
        'total' => 'total',
        'createManifest' => 'createManifest',
        'createShippingList' => 'createShippingList',
        'dpi' => 'dpi',
        'optimizePNG' => 'optimizePNG',
        'positions' => 'positions',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shopOrderId' => 'setShopOrderId',
        'ppl' => 'setPpl',
        'total' => 'setTotal',
        'createManifest' => 'setCreateManifest',
        'createShippingList' => 'setCreateShippingList',
        'dpi' => 'setDpi',
        'optimizePNG' => 'setOptimizePNG',
        'positions' => 'setPositions',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shopOrderId' => 'getShopOrderId',
        'ppl' => 'getPpl',
        'total' => 'getTotal',
        'createManifest' => 'getCreateManifest',
        'createShippingList' => 'getCreateShippingList',
        'dpi' => 'getDpi',
        'optimizePNG' => 'getOptimizePNG',
        'positions' => 'getPositions',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    public const DPI_DPI300 = 'DPI300';
    public const DPI_DPI203 = 'DPI203';

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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('shopOrderId', $data ?? [], null);
        $this->setIfExists('ppl', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('createManifest', $data ?? [], null);
        $this->setIfExists('createShippingList', $data ?? [], null);
        $this->setIfExists('dpi', $data ?? [], null);
        $this->setIfExists('optimizePNG', $data ?? [], null);
        $this->setIfExists('positions', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
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
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['shopOrderId']) && (mb_strlen($this->container['shopOrderId']) > 18)) {
            $invalidProperties[] = "invalid value for 'shopOrderId', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['shopOrderId']) && (mb_strlen($this->container['shopOrderId']) < 1)) {
            $invalidProperties[] = "invalid value for 'shopOrderId', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ppl']) && ($this->container['ppl'] < 1)) {
            $invalidProperties[] = "invalid value for 'ppl', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getDpiAllowableValues();
        if (!is_null($this->container['dpi']) && !in_array($this->container['dpi'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dpi', must be one of '%s'",
                $this->container['dpi'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['positions'] === null) {
            $invalidProperties[] = "'positions' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets shopOrderId
     *
     * @return string|null
     */
    public function getShopOrderId()
    {
        return $this->container['shopOrderId'];
    }

    /**
     * Sets shopOrderId
     *
     * @param string|null $shopOrderId The order number in the shop. All characters are allowed except < and &. It is optional in case of query parameter finalize is true. In all other cases it is mandatory required.
     *
     * @return self
     */
    public function setShopOrderId($shopOrderId)
    {
        if (is_null($shopOrderId)) {
            throw new \InvalidArgumentException('non-nullable shopOrderId cannot be null');
        }
        if ((mb_strlen($shopOrderId) > 18)) {
            throw new \InvalidArgumentException('invalid length for $shopOrderId when calling AppShoppingCartPNGRequest., must be smaller than or equal to 18.');
        }
        if ((mb_strlen($shopOrderId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shopOrderId when calling AppShoppingCartPNGRequest., must be bigger than or equal to 1.');
        }

        $this->container['shopOrderId'] = $shopOrderId;

        return $this;
    }

    /**
     * Gets ppl
     *
     * @return int|null
     */
    public function getPpl()
    {
        return $this->container['ppl'];
    }

    /**
     * Sets ppl
     *
     * @param int|null $ppl The PPL (Product Price List) to which the products in the shopping cart refer.
     *
     * @return self
     */
    public function setPpl($ppl)
    {
        if (is_null($ppl)) {
            throw new \InvalidArgumentException('non-nullable ppl cannot be null');
        }

        if (($ppl < 1)) {
            throw new \InvalidArgumentException('invalid value for $ppl when calling AppShoppingCartPNGRequest., must be bigger than or equal to 1.');
        }

        $this->container['ppl'] = $ppl;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total value of the shopping cart in euro cents.
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets createManifest
     *
     * @return bool|null
     */
    public function getCreateManifest()
    {
        return $this->container['createManifest'];
    }

    /**
     * Sets createManifest
     *
     * @param bool|null $createManifest The flag indicating whether a posting receipt should be created.
     *
     * @return self
     */
    public function setCreateManifest($createManifest)
    {
        if (is_null($createManifest)) {
            throw new \InvalidArgumentException('non-nullable createManifest cannot be null');
        }
        $this->container['createManifest'] = $createManifest;

        return $this;
    }

    /**
     * Gets createShippingList
     *
     * @return string|null
     */
    public function getCreateShippingList()
    {
        return $this->container['createShippingList'];
    }

    /**
     * Sets createShippingList
     *
     * @param string|null $createShippingList Enum that determines whether a mailing list should be created and if so, whether with or without addresses.
     *
     * @return self
     */
    public function setCreateShippingList($createShippingList)
    {
        if (is_null($createShippingList)) {
            throw new \InvalidArgumentException('non-nullable createShippingList cannot be null');
        }
        $this->container['createShippingList'] = $createShippingList;

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
     * @param bool|null $optimizePNG The flag to optimize the PNG (avoid redundant area height).
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
     * Gets positions
     *
     * @return \OpenAPI\Client\Internetmarke\Model\AppShoppingCartPosition[]
     */
    public function getPositions()
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param \OpenAPI\Client\Internetmarke\Model\AppShoppingCartPosition[] $positions List of PNG order items. At least one item has to be specified.
     *
     * @return self
     */
    public function setPositions($positions)
    {
        if (is_null($positions)) {
            throw new \InvalidArgumentException('non-nullable positions cannot be null');
        }
        $this->container['positions'] = $positions;

        return $this;
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
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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


