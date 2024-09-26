<?php
/**
 * Authentication200Response
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
 * Authentication200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Internetmarke
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Authentication200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Authentication200Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessToken' => 'string',
        'walletBalance' => 'int',
        'infoMessage' => 'string',
        'tokenType' => 'string',
        'expiresIn' => 'int',
        'issuedAt' => 'string',
        'externalCustomerId' => 'string',
        'autenticatedUser' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accessToken' => null,
        'walletBalance' => null,
        'infoMessage' => null,
        'tokenType' => null,
        'expiresIn' => null,
        'issuedAt' => null,
        'externalCustomerId' => null,
        'autenticatedUser' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accessToken' => false,
		'walletBalance' => false,
		'infoMessage' => false,
		'tokenType' => false,
		'expiresIn' => false,
		'issuedAt' => false,
		'externalCustomerId' => false,
		'autenticatedUser' => false
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
        'accessToken' => 'access_token',
        'walletBalance' => 'walletBalance',
        'infoMessage' => 'infoMessage',
        'tokenType' => 'tokenType',
        'expiresIn' => 'expires_in',
        'issuedAt' => 'issued_at',
        'externalCustomerId' => 'external_customer_id',
        'autenticatedUser' => 'autenticated_user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'walletBalance' => 'setWalletBalance',
        'infoMessage' => 'setInfoMessage',
        'tokenType' => 'setTokenType',
        'expiresIn' => 'setExpiresIn',
        'issuedAt' => 'setIssuedAt',
        'externalCustomerId' => 'setExternalCustomerId',
        'autenticatedUser' => 'setAutenticatedUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'walletBalance' => 'getWalletBalance',
        'infoMessage' => 'getInfoMessage',
        'tokenType' => 'getTokenType',
        'expiresIn' => 'getExpiresIn',
        'issuedAt' => 'getIssuedAt',
        'externalCustomerId' => 'getExternalCustomerId',
        'autenticatedUser' => 'getAutenticatedUser'
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
        $this->setIfExists('accessToken', $data ?? [], null);
        $this->setIfExists('walletBalance', $data ?? [], null);
        $this->setIfExists('infoMessage', $data ?? [], null);
        $this->setIfExists('tokenType', $data ?? [], null);
        $this->setIfExists('expiresIn', $data ?? [], null);
        $this->setIfExists('issuedAt', $data ?? [], null);
        $this->setIfExists('externalCustomerId', $data ?? [], null);
        $this->setIfExists('autenticatedUser', $data ?? [], null);
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

        if (!is_null($this->container['issuedAt']) && !preg_match("/^[A-Za-z]{3}, \\d{2} [A-Za-z]{3} \\d{4} \\d{2}:\\d{2}:\\d{2} GMT$/", $this->container['issuedAt'])) {
            $invalidProperties[] = "invalid value for 'issuedAt', must be conform to the pattern /^[A-Za-z]{3}, \\d{2} [A-Za-z]{3} \\d{4} \\d{2}:\\d{2}:\\d{2} GMT$/.";
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
     * Gets accessToken
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     *
     * @param string|null $accessToken The access token / bearer token
     *
     * @return self
     */
    public function setAccessToken($accessToken)
    {
        if (is_null($accessToken)) {
            throw new \InvalidArgumentException('non-nullable accessToken cannot be null');
        }
        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    /**
     * Gets walletBalance
     *
     * @return int|null
     */
    public function getWalletBalance()
    {
        return $this->container['walletBalance'];
    }

    /**
     * Sets walletBalance
     *
     * @param int|null $walletBalance money balance in portokasse
     *
     * @return self
     */
    public function setWalletBalance($walletBalance)
    {
        if (is_null($walletBalance)) {
            throw new \InvalidArgumentException('non-nullable walletBalance cannot be null');
        }
        $this->container['walletBalance'] = $walletBalance;

        return $this;
    }

    /**
     * Gets infoMessage
     *
     * @return string|null
     */
    public function getInfoMessage()
    {
        return $this->container['infoMessage'];
    }

    /**
     * Sets infoMessage
     *
     * @param string|null $infoMessage info message, if any
     *
     * @return self
     */
    public function setInfoMessage($infoMessage)
    {
        if (is_null($infoMessage)) {
            throw new \InvalidArgumentException('non-nullable infoMessage cannot be null');
        }
        $this->container['infoMessage'] = $infoMessage;

        return $this;
    }

    /**
     * Gets tokenType
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
     * Sets tokenType
     *
     * @param string|null $tokenType Will always contain 'BearerToken'
     *
     * @return self
     */
    public function setTokenType($tokenType)
    {
        if (is_null($tokenType)) {
            throw new \InvalidArgumentException('non-nullable tokenType cannot be null');
        }
        $this->container['tokenType'] = $tokenType;

        return $this;
    }

    /**
     * Gets expiresIn
     *
     * @return int|null
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param int|null $expiresIn remaining token validity in seconds
     *
     * @return self
     */
    public function setExpiresIn($expiresIn)
    {
        if (is_null($expiresIn)) {
            throw new \InvalidArgumentException('non-nullable expiresIn cannot be null');
        }
        $this->container['expiresIn'] = $expiresIn;

        return $this;
    }

    /**
     * Gets issuedAt
     *
     * @return string|null
     */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
     * Sets issuedAt
     *
     * @param string|null $issuedAt Time when token was issued
     *
     * @return self
     */
    public function setIssuedAt($issuedAt)
    {
        if (is_null($issuedAt)) {
            throw new \InvalidArgumentException('non-nullable issuedAt cannot be null');
        }

        if ((!preg_match("/^[A-Za-z]{3}, \\d{2} [A-Za-z]{3} \\d{4} \\d{2}:\\d{2}:\\d{2} GMT$/", ObjectSerializer::toString($issuedAt)))) {
            throw new \InvalidArgumentException("invalid value for \$issuedAt when calling Authentication200Response., must conform to the pattern /^[A-Za-z]{3}, \\d{2} [A-Za-z]{3} \\d{4} \\d{2}:\\d{2}:\\d{2} GMT$/.");
        }

        $this->container['issuedAt'] = $issuedAt;

        return $this;
    }

    /**
     * Gets externalCustomerId
     *
     * @return string|null
     */
    public function getExternalCustomerId()
    {
        return $this->container['externalCustomerId'];
    }

    /**
     * Sets externalCustomerId
     *
     * @param string|null $externalCustomerId Matches the user requesting the token, used internally
     *
     * @return self
     */
    public function setExternalCustomerId($externalCustomerId)
    {
        if (is_null($externalCustomerId)) {
            throw new \InvalidArgumentException('non-nullable externalCustomerId cannot be null');
        }
        $this->container['externalCustomerId'] = $externalCustomerId;

        return $this;
    }

    /**
     * Gets autenticatedUser
     *
     * @return string|null
     */
    public function getAutenticatedUser()
    {
        return $this->container['autenticatedUser'];
    }

    /**
     * Sets autenticatedUser
     *
     * @param string|null $autenticatedUser user requesting the token
     *
     * @return self
     */
    public function setAutenticatedUser($autenticatedUser)
    {
        if (is_null($autenticatedUser)) {
            throw new \InvalidArgumentException('non-nullable autenticatedUser cannot be null');
        }
        $this->container['autenticatedUser'] = $autenticatedUser;

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


