<?php


namespace Peugeot;

class Car
{

    private $portes;
    
    private $make;


    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make)
    {
        $this->make = $make;

        return $this;
    }

    public function getPortes()
    {
        return $this->portes;
    }

    public function setPortes($portes)
    {
        $this->portes = $portes;

        return $this;
    }

    
    public function __construct($data)
    {
       $this->hydrate($data);
    }

    private function hydrate($data)
    {
        foreach ($data as $key => $value) {

            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}