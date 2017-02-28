<?php
/**
 * ObjectFullDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Client\Model;

use \ArrayAccess;

/**
 * ObjectFullDetails Class Doc Comment
 *
 * @category    Class
 * @description Object Details json response
 * @package     Autodesk\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ObjectFullDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'objectFullDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bucket_key' => 'string',
        'object_id' => 'string',
        'object_key' => 'string',
        'sha1' => 'string',
        'size' => 'int',
        'content_type' => 'string',
        'location' => 'string',
        'block_sizes' => 'int[]',
        'deltas' => '\Autodesk\Client\Model\ObjectFullDetailsDeltas[]',
    ];

    /**
     * @return \string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'bucket_key' => 'bucketKey',
        'object_id' => 'objectId',
        'object_key' => 'objectKey',
        'sha1' => 'sha1',
        'size' => 'size',
        'content_type' => 'contentType',
        'location' => 'location',
        'block_sizes' => 'blockSizes',
        'deltas' => 'deltas',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bucket_key' => 'setBucketKey',
        'object_id' => 'setObjectId',
        'object_key' => 'setObjectKey',
        'sha1' => 'setSha1',
        'size' => 'setSize',
        'content_type' => 'setContentType',
        'location' => 'setLocation',
        'block_sizes' => 'setBlockSizes',
        'deltas' => 'setDeltas',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bucket_key' => 'getBucketKey',
        'object_id' => 'getObjectId',
        'object_key' => 'getObjectKey',
        'sha1' => 'getSha1',
        'size' => 'getSize',
        'content_type' => 'getContentType',
        'location' => 'getLocation',
        'block_sizes' => 'getBlockSizes',
        'deltas' => 'getDeltas',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bucket_key'] = isset($data['bucket_key']) ? $data['bucket_key'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['object_key'] = isset($data['object_key']) ? $data['object_key'] : null;
        $this->container['sha1'] = isset($data['sha1']) ? $data['sha1'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['block_sizes'] = isset($data['block_sizes']) ? $data['block_sizes'] : null;
        $this->container['deltas'] = isset($data['deltas']) ? $data['deltas'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets bucket_key
     * @return string
     */
    public function getBucketKey()
    {
        return $this->container['bucket_key'];
    }

    /**
     * Sets bucket_key
     * @param string $bucket_key Bucket key
     * @return $this
     */
    public function setBucketKey($bucket_key)
    {
        $this->container['bucket_key'] = $bucket_key;

        return $this;
    }

    /**
     * Gets object_id
     * @return string
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     * @param string $object_id Object URN
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_key
     * @return string
     */
    public function getObjectKey()
    {
        return $this->container['object_key'];
    }

    /**
     * Sets object_key
     * @param string $object_key Object name
     * @return $this
     */
    public function setObjectKey($object_key)
    {
        $this->container['object_key'] = $object_key;

        return $this;
    }

    /**
     * Gets sha1
     * @return string
     */
    public function getSha1()
    {
        return $this->container['sha1'];
    }

    /**
     * Sets sha1
     * @param string $sha1 Object SHA1
     * @return $this
     */
    public function setSha1($sha1)
    {
        $this->container['sha1'] = $sha1;

        return $this;
    }

    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param int $size Object size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets content_type
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     * @param string $content_type Object content-type
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location URL to download the object
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets block_sizes
     * @return int[]
     */
    public function getBlockSizes()
    {
        return $this->container['block_sizes'];
    }

    /**
     * Sets block_sizes
     * @param int[] $block_sizes For delta-encoding. Represents whether a signature exists at a specific block size
     * @return $this
     */
    public function setBlockSizes($block_sizes)
    {
        $this->container['block_sizes'] = $block_sizes;

        return $this;
    }

    /**
     * Gets deltas
     * @return \Autodesk\Client\Model\ObjectFullDetailsDeltas[]
     */
    public function getDeltas()
    {
        return $this->container['deltas'];
    }

    /**
     * Sets deltas
     * @param \Autodesk\Client\Model\ObjectFullDetailsDeltas[] $deltas Patch files available for download related to this object
     * @return $this
     */
    public function setDeltas($deltas)
    {
        $this->container['deltas'] = $deltas;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Autodesk\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


