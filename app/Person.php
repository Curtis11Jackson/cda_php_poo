<?php

trait Timstampable
{
    private $created_at;
    
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}

class AbstractAction 
{
    public function walk(){
        echo "walking -- ";
    }
}

class Animal extends AbstractAction {
    
}

class Person extends AbstractAction
{
    use Timstampable;

    public $name = "Curtis";

    // public function __construct($name)
    // {
    //     $this->setName($name);
    // }

    public function setName($name) 
    {
        $this->name = $name;

        return $this;
    }
}

$someone = new Person;

var_dump($someone);

$someone->setName("Yvan")->walk();
var_dump($someone);