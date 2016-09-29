<?php
namespace GeoPath\Entity;

class Point
{
    /** @var int */
    protected $time;
    /** @var float */
    protected $latitude;
    /** @var float */
    protected $longitude;
    /** @var int */
    protected $elevation;
    /** @var Point */
    protected $prev;
    /** @var Point */
    protected $next;

    /**
     * Point constructor.
     * @param int $time
     * @param float $latitude
     * @param float $longitude
     * @param int $elevation
     */
    public function __construct(int $time, float $latitude, float $longitude, int $elevation)
    {
        $this->time = $time;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->elevation = $elevation;
    }

    /**
     * @return int
     */
    public function getTime():int
    {
        return $this->time;
    }

    /**
     * @param int $time
     * @return Point
     */
    public function setTime($time):Point
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude():float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Point
     */
    public function setLatitude($latitude):Point
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude():float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Point
     */
    public function setLongitude($longitude):Point
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return int
     */
    public function getElevation():int
    {
        return $this->elevation;
    }

    /**
     * @param int $elevation
     * @return Point
     */
    public function setElevation(int $elevation):Point
    {
        $this->elevation = $elevation;

        return $this;
    }

    /**
     * @return Point
     */
    public function getPrev():?Point
    {
        return $this->prev;
    }

    /**
     * @param Point $prev
     * @return Point
     */
    public function setPrev(?Point $prev):Point
    {
        $this->prev = $prev;

        return $this;
    }

    /**
     * @return Point
     */
    public function getNext():?Point
    {
        return $this->next;
    }

    /**
     * @param Point $next
     * @return Point
     */
    public function setNext(?Point $next):Point
    {
        $this->next = $next;

        return $this;
    }
}