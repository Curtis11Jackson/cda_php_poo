<?php

namespace M2i\Person;

trait Timastampable
{
    private $created_at;
    public function getCreatedAt($created_at)
    {
        $this->created_at($created_at);
        return $this;
    }
}


interface MakeSoundInterface
{
    public function makeSound();
}

abstract class AbstractAction implements MakeSoundInterface
{
    public function walk()
    {
    echo 'walking  ';
    return $this;
    }
}


abstract class Animal extends AbstractAction 
{
    private $name;
    public function getName($name)
    {
        $this->name($name);
        return $this;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function makeSound(){
        echo 'bark';
    }
    
}

class Person extends AbstractAction 
{
    public $name ='yvan';
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function makeSound(){
        echo 'speak   >';
    }
}

$someone = new Person();
//var_dump($yvan);

$someone->setName('curtis')->walk()->makeSound();
// var_dump($someone);

var_dump(get_class($someone));