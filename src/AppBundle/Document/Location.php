<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Location {

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $personName;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $latitude;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $longitude;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $altitude;

    /**
     * @MongoDB\Field(type="timestamp")
     */
    protected $timestamp;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $accuracy;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set personName
     *
     * @param string $personName
     * @return $this
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Get personName
     *
     * @return string $personName
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set altitude
     *
     * @param int $altitude
     * @return $this
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;
        return $this;
    }

    /**
     * Get altitude
     *
     * @return int $altitude
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set timestamp
     *
     * @param timestamp $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return timestamp $timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set accuracy
     *
     * @param int $accuracy
     * @return $this
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;
        return $this;
    }

    /**
     * Get accuracy
     *
     * @return int $accuracy
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }
}
