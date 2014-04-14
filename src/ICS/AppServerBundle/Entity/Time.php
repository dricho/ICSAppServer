<?php

namespace ICS\AppServerBundle\Entity;

class Time extends Entity {
    protected $id;
    protected $time;
    
//get functions
    
    public function getID()
    {
        return $this->id;
    }
    
    public function getTime()
    {
        return $this->time;
    }
    
//set functions
    
    public function setID()
    {
        
    }
    
    public function setTime()
    {
        
    }
}

